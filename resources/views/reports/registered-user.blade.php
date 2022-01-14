<table width="100%" border="0" cellpadding="2" cellspacing="1" style="width:836pt; line-height:16pt; text-decoration:underline;">
    <tr><td style="border:none; font-size:12pt; font-weight: bold; text-align: center;" @if($type != 3) colspan="13" @else colspan="11" @endif>Cavite State University</td></tr>
    <tr><td style="border:none; font-size:12pt; font-weight: bold; text-align: center;" @if($type != 3) colspan="13" @else colspan="11" @endif>Completed Evaluation Report</td></tr>
    @if($date || $start_date || $end_date) 
    <tr>
        <td style="border:none; font-size:12pt; font-weight: bold; text-align: center;" @if($type != 3) colspan="13" @else colspan="11" @endif>
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
        <td style="border:none; font-size:12pt;" @if($type != 3) colspan="13" @else colspan="11" @endif>Rundate : {{ carbon\Carbon::now()->format('M d Y - h:i a') }}</td>
    </tr>
    <tr>
        <td style="border:none; font-size:12pt; text-transform:capitalize;" @if($type != 3) colspan="13" @else colspan="11" @endif>Run by : {{ Auth::user()->getFullNameLNfirst() }}</td>
    </tr>
    <tbody>
        @foreach($data as $extension_service_name => $webinars)
            {{-- <tr>
                <td>{{ $webinars[0]->extensionService()->name }}</td>
            </tr> --}}
            <tr>
                <td style="text-align:center;" @if($type != 3) colspan="13" @else colspan="11" @endif>-----------------------------------------------------------------------------------</td>
            </tr>
            <tr style="text-align: left;">
                <td style="border-bottom:none;" @if($type != 3) colspan="13" @else colspan="11" @endif ><strong>Extension Service: {{ ucwords(strtolower($extension_service_name)) }}</strong></td>
            </tr>
            @foreach($webinars as $title => $webinar)
                <tr>
                    <td style="text-align:center;" @if($type != 3) colspan="13" @else colspan="11" @endif>--------------------------------------</td>
                </tr>
                <tr style="text-align: left;">
                    <td style="border-bottom:none;" @if($type != 3) colspan="13" @else colspan="11" @endif><strong>Title: </strong>{{ $title}}</td>
                </tr>
                <tr style="text-align: left;">
                    <td style="border-bottom:none;" @if($type != 3) colspan="13" @else colspan="11" @endif><strong>Presented By:</strong>{{ $webinar[0]->speaker}}</td>
                </tr>

                <tr style="text-align: center;">
                    <td style="border-bottom:none;" colspan="2"><strong>Email</strong></td>
                    <td style="border-bottom:none;" colspan="2"><strong>Last Name</strong></td>
                    <td style="border-bottom:none;" colspan="2"><strong>First Name</strong></td>
                    <td style="border-bottom:none;"><strong>Middle I</strong></td>
                    <td style="border-bottom:none;" colspan="2"><strong>Username</strong></td>
                    <td style="border-bottom:none;" colspan="2"><strong>Date Registered</strong></td>
                    @if($type != 3)
                        <td style="border-bottom:none;" colspan="2"><strong>Date Completed</strong></td>
                    @endif
                </tr>
                @foreach($webinar as $user)
                    <tr>
                        <td colspan="2">{{ $user->user_email }}</td>
                        <td colspan="2">{{ $user->user_last_name }}</td>
                        <td colspan="2">{{ $user->user_first_name }}</td>
                        <td>{{ $user->user_middle_name ? $user->user_middle_name[0] : '' }}</td>
                        <td colspan="2">{{ $user->user_username }}</td>
                        <td colspan="2">
                            {{ $user->date_registered ? Carbon\Carbon::parse($user->date_registered)->format('M d, Y') : '' }}
                            {{-- {{  Helper::webinarUser($user->id, $webinar->id) ? carbon\carbon::parse(Helper::webinarUser($user->id, $webinar->id)->created_at)->format('M d, Y') : '' }} --}}
                        </td>
                        @if($type != 3)
                            <td colspan="2">
                                {{ $user->date_completed ? Carbon\Carbon::parse($user->date_completed)->format('M d, Y') : '' }}
                                {{-- {{  Helper::webinarUser($user->id, $webinar->id) ? carbon\carbon::parse(Helper::webinarUser($user->id, $webinar->id)->date_completed)->format('M d, Y') : '' }} --}}
                            </td>
                        @endif
                    </tr>
                @endforeach
            @endforeach 
        @endforeach
    </tbody>
</table>