<table width="100%" border="0" cellpadding="2" cellspacing="1" style="width:836pt; line-height:16pt; text-decoration:underline;">
    <tr><td style="border:none; font-size:12pt; font-weight: bold; text-align: center;" colspan="24">Cavite State University</td></tr>
    <tr><td style="border:none; font-size:12pt; font-weight: bold; text-align: center;" colspan="24">Webinars Report</td></tr>
    @if($date || $start_date || $end_date) 
        <tr>
            <td style="border:none; font-size:12pt; font-weight: bold; text-align: center;" colspan="24">
                Date created 
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
        <td style="border:none; font-size:12pt;" colspan="24">Rundate : {{ carbon\Carbon::now()->format('M d Y - h:i a') }}</td>
    </tr>
    <tr>
        <td style="border:none; font-size:12pt; text-transform:capitalize;" colspan="24">Run by : {{ Auth::user()->getFullNameLNfirst() }}</td>
    </tr>
    <tbody>
        @foreach($data as $extension_service_name => $webinars)
            <tr>
                <td style="text-align:center;" colspan="24">-----------------------------------------------------------------------------------</td>
            </tr>
            <tr style="text-align: left;">
                <td style="border-bottom:none;" colspan="24"><strong>Extension Service: {{ ucwords(strtolower($extension_service_name)) }}</strong></td>
            </tr>
            <tr>
                <td style="text-align: center;" colspan="4" rowspan="2"><strong>Title</strong></td>
                <td style="text-align: center;" colspan="2" rowspan="2"><strong>Speaker</strong></td>
                <td style="text-align: center;" colspan="2" rowspan="2"><strong>Date</strong></td>
                <td style="text-align: center;" rowspan="2"><strong>Price</strong></td>
                <td style="text-align: center;" rowspan="2"><strong>Status</strong></td>
                <td style="text-align: center;" rowspan="2"><strong>Duration</strong></td>
                <td style="text-align: center;" colspan="2"><strong>Users</strong></td>
                <td style="text-align: center;" colspan="6" rowspan="2"><strong>About</strong></td>
                <td style="text-align: center;" colspan="11"><strong>Links</strong></td>
                <td style="text-align: center;" colspan="2" rowspan="2"><strong>Created By</strong></td>
                <td style="text-align: center;" colspan="2" rowspan="2"><strong>Created At</strong></td>
                <td style="text-align: center;" colspan="2" rowspan="2"><strong>Updated At</strong></td>
            </tr>
            <tr>
                <td><strong>Registered</strong></td>
                <td><strong>Completed</strong></td>

                <td colspan="3"><strong>Youtube</strong></td>
                <td colspan="2"><strong>Evalution</strong></td>
                <td colspan="2"><strong>E-Certificate</strong></td>
                <td colspan="2"><strong>Registration</strong></td>
                <td colspan="2"><strong>Webinar</strong></td>
            </tr>
        
            @foreach($webinars as $webinar)
                <tr>
                    <td colspan="4">{{ $webinar->title }}</td>
                    <td colspan="2">{{ $webinar->speaker }}</td>
                    <td colspan="2">{{ $webinar->date ? Carbon\Carbon::parse($webinar->date)->format('M d, Y') : '' }} </td>
                    <td>{{ $webinar->price }}</td>
                    <td>{{ $webinar->status_name() }}</td>
                    <td>{{ $webinar->duration }}</td>
                    <td>{{ $webinar->users->count() }}</td>
                    <td>{{ $webinar->completed()->count() }}</td>
                    <td colspan="6">{{ $webinar->about }}</td>
                    <td colspan="3">https://youtu.be/{{ $webinar->video_link }}</td>
                    <td colspan="2">{{ $webinar->evaluation_link }}</td>
                    <td colspan="2">{{ $webinar->ecertificate_link }}</td>
                    <td colspan="2">{{ $webinar->registration_link }}</td>
                    <td colspan="2">{{ $webinar->webinar_link }}</td>
                    <td colspan="2">{{ $webinar->createdBy()->last_name . ", " . $webinar->createdBy()->first_name . " " }}{{ $webinar->createdBy()->middle_name ? $webinar->createdBy()->middle_name[0] : '' }}</td>
                    
                    <td colspan="2">{{ $webinar->created_at ? Carbon\Carbon::parse($webinar->created_at)->format('M d, Y') : '' }} </td>
                    <td colspan="2">{{ $webinar->updated_at ? Carbon\Carbon::parse($webinar->updated_at)->format('M d, Y') : '' }} </td> --}}
                </tr>
            @endforeach
        @endforeach
    </tbody>
</table>