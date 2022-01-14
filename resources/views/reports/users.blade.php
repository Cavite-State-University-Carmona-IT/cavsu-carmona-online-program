<table width="100%" border="0" cellpadding="2" cellspacing="1" style="width:836pt; line-height:16pt; text-decoration:underline;">
    <tr><td style="border:none; font-size:12pt; font-weight: bold; text-align: center;" colspan="11">Cavite State University</td></tr>
    <tr><td style="border:none; font-size:12pt; font-weight: bold; text-align: center;" colspan="11">Users Report</td></tr>
    @if($date || $start_date || $end_date) 
        <tr>
            <td style="border:none; font-size:12pt; font-weight: bold; text-align: center;" colspan="11">
                Date Registered 
                @if($specific_date == true) 
                    {{ Carbon\Carbon::parse($date)->format('M d, Y') }} 
                @else 
                    @if($start_date && $end_date) 
                        from {{ Carbon\Carbon::parse($start_date)->format('M d, Y') . " to " . Carbon\Carbon::parse($end_date)->format('M d, Y') }} 
                    @else 
                        {{ $start_date ? ' from ' .Carbon\Carbon::parse($start_date)->format('M d, Y'):'' }}
                        {{ $end_date ? ' to ' . Carbon\Carbon::parse($end_date)->format('M d, Y'):'' }} 
                    @endif
                @endif
            </td>
        </tr>
    @endif
    <tr>
        <td style="border:none; font-size:12pt;" colspan="11">Rundate : {{ carbon\Carbon::now()->format('M d Y - h:i a') }}</td>
    </tr>
    <tr>
        <td style="border:none; font-size:12pt; text-transform:capitalize;" colspan="11">Run by : {{ Auth::user()->getFullNameLNfirst() }}</td>
    </tr>
    <tbody>
        <tr>
            <td style="text-align: center;" colspan="2" rowspan="2"><strong>Last Name</strong></td>
            <td style="text-align: center;" colspan="2" rowspan="2"><strong>First Name</strong></td>
            <td style="text-align: center;" colspan="2" rowspan="2"><strong>Middle Name</strong></td>
            <td style="text-align: center;" colspan="2" rowspan="2"><strong>Email</strong></td>
            <td style="text-align: center;" colspan="2" rowspan="2"><strong>Username</strong></td>
            <td style="text-align: center;" rowspan="2"><strong>Gender</strong></td>
            <td style="text-align: center;" colspan="2" rowspan="2"><strong>Marital Status</strong></td>
            <td style="text-align: center;" colspan="2" rowspan="2"><strong>Birthdate</strong></td>
            <td style="" colspan="2" rowspan="2"><strong>Employment Status</strong></td>
            <td style="" colspan="2" rowspan="2"><strong>Highest Educational Status</strong></td>
            <td style="text-align: center;" colspan="2" rowspan="2"><strong>Income</strong></td>
            <td style="text-align: center;" colspan="2"><strong>Webinars</strong></td>
            <td style="text-align: center;" colspan="4" rowspan="2"><strong>Address</strong></td>
            <td style="text-align: center;" colspan="2" rowspan="2"><strong>Created At</strong></td>
            <td style="text-align: center;" colspan="2" rowspan="2"><strong>Updated At</strong></td>
        </tr>
        <tr>
            <td style=""><strong>Registered</strong></td>
            <td style=""><strong>Completed</strong></td>
        </tr>
        @foreach($users as $user)
            <tr>
                <td colspan="2">{{ $user->last_name }}</td>
                <td colspan="2">{{ $user->first_name }}</td>
                <td colspan="2">{{ $user->middle_name }}</td>
                <td colspan="2">{{ $user->email }}</td>
                <td colspan="2">{{ $user->username }}</td>
                <td>{{ Helper::gender($user->gender) }}</td>
                <td colspan="2">{{ Helper::marital_status($user->marital_status) }}</td>
                <td colspan="2">{{ $user->birth_date ? Carbon\Carbon::parse($user->birth_date)->format('M d, Y') : '' }} </td>
                <td colspan="2">{{ Helper::employment_status($user->employment_status) }}</td>
                <td colspan="2">{{ Helper::highest_educational_attainment($user->highest_educational_attainment) }}</td>
                <td colspan="2">{{ $user->income }}</td>
                <td>{{ $user->registeredWebinars()->count() }}</td>
                <td>{{ $user->completedWebinars()->count() }}</td>
                <td colspan="4">{{ $user->address }}</td>
                <td colspan="2">{{ $user->created_at ? Carbon\Carbon::parse($user->created_at)->format('M d, Y') : '' }} </td>
                <td colspan="2">{{ $user->updated_at ? Carbon\Carbon::parse($user->updated_at)->format('M d, Y') : '' }} </td>
            </tr>
        @endforeach
    </tbody>
</table>