<?php
namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\Suscriber;
use App\Mail\MemberRequest;
use Illuminate\Support\Str;
use App\Exports\MembersExport;
use App\Mail\MemberActivation;
use App\Mail\NewMemberRequest;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::latest()->paginate(9);
        return view('admin.members.index', compact('members'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMemberRequest $request)
    {
        $member = new Member();
        $member->name = $request->name;
        $member->email = $request->email;
        $member->phone = $request->phone;
        $member->active = false;
        $member->save();
        if($request->newsletter){
            $suscriber = Suscriber::firstOrCreate([
                'name' => $request->name,
                'email' => $request->email
            ]);
        }
        Mail::to($member->email)->send(new MemberRequest($member));
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new NewMemberRequest($member));
        return redirect()->route('home')->with('successMemberRegistration', 'Congrats! Your request has been sent.');
    }
    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMemberRequest $request, Member $member)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        $member->delete();
        return redirect()->route('members.index')->with('success', 'Member deleted successfully.');
    }
    public function download(){
        $fileName = Str::slug('Baja Aerospace Cluster Members List', '-').'.xlsx';
        return Excel::download(new MembersExport(), $fileName); 
    }
    public function activate(Member $member){
        $member->active = !$member->active;
        $member->save();
        if($member->active){
            Mail::to($member->email)->send(new MemberActivation($member));
        }
        return redirect()->route('members.index')->with('success', 'Member updated successfully.');
    }
}
