<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use File;
use Illuminate\Support\Facades\Storage;
class LicensePageControler extends Controller
{
    public function index()
    {
        $license_page = DB::table('vhn_license_page')->get();
        return view('admincp.license-page.index', compact('license_page'));
    }
    public function create()
    {
        return view('admincp.license-page.create');
    }

      public function edit($id)
    {
        try {
            $licensePage = DB::table('vhn_license_page')->where('id', $id)->first();
            return view('admincp.license-page.edit', compact('licensePage'));
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Không tìm thấy đường dẫn');
        }
    }
    public function store(Request $request)
    {
        try {
            $data          = [];
            $data['name']  = $request->name;
            $slug          = Str::slug($request->name);
            $data['slug']  = $slug;
            $data['code']  = $request->code;
            $data['title'] = $request->title;

            if ($request->hasFile('file')) {
                $duoi = $request->file('file')->getClientOriginalExtension();
                $request->file('file')->storeAs('giaypheps', $slug . '.' . $duoi, 'public');
                $hasfile = '/storage/giaypheps/' . $slug . '.' . $duoi;
            } else {
                $hasfile = null;
            }
            $data['file']    = $hasfile;
            $data['content'] = $request->content;
            $data['status']  = 1;
            $id              = DB::table('vhn_license_page')->insertGetId($data);
            return redirect('admincp/license-page/edit/' . $id)->with('success', 'Đã thêm thành công, xem lại thông tin trước khi thoát!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Tài khoản không có quyền chỉnh sửa!');
        }
    }
    public function update(Request $request, $id)
    {
        try {
            $getLincensePage = DB::table('vhn_license_page')->where('id', $id)->first();
            $data = [];
            $data['name'] = $request->name;
            $slug = Str::slug($request->name);
            $data['slug'] = $slug;
            $data['code'] = $request->code;
            $data['title'] = $request->title;

            if ($request->hasFile('file')) {
                if ($getLincensePage->file && File::exists(ltrim($getLincensePage->file, '/'))) {
                    Storage::disk('public')->delete(preg_replace('/^\/storage/', '', $getLincensePage->file));
                }
                $duoi = $request->file('file')->getClientOriginalExtension();
                $request->file('file')->storeAs('giaypheps', $slug . '.' . $duoi, 'public');
                $hasfile = '/storage/giaypheps/' . $slug . '.' . $duoi;
            } else {
                $hasfile = null;
                if ($request->hidefile) {
                    $hasfile = $request->hidefile;
                }
            }
            $data['file'] = $hasfile;
            $data['content'] = $request->content;
            DB::table('vhn_license_page')->where('id', $id)->update($data);
            return redirect('admincp/license-page/edit/' . $id)->with('success', 'Bạn đã chỉnh sửa thành công!');
        } catch (\Throwable $th) {
            return redirect('admincp/license-page/edit/' . $id)->with('error', 'Có lỗi xảy ra, kiểm tra lại các trường đã nhập');
        }
    }
    public function status(Request $request)
    {
        try {
            $item = DB::table('vhn_license_page')->where('id', $request->id)->first();
            $stt  = ($item->status == 1) ? 0 : 1;
            DB::table('vhn_license_page')->where('id', $request->id)->update(['status' => $stt]);
            return response()->json('success');

        } catch (\Throwable $th) {
            return response()->json('error');
        }
    }
    public function destroy(Request $request)
    {
        try {
            DB::table('vhn_license_page')->where('id', $request->id)->delete();
            return response()->json('success');
        } catch (\Throwable $th) {
            return response()->json('error');
        }

    }
}
