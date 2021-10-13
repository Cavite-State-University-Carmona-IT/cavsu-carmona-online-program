<div style="width:80%;">
	<table width="100%" border="0" cellpadding="2" cellspacing="1" style="width:836pt; line-height:16pt;">
		<tr><td style="border:none; font-size:12pt;" align="middle" colspan="5"><strong>CAVITE STATE UNIVERSITY</strong></td></tr>
		<tr><td style="border:none; font-size:12pt;" align="middle" colspan="5">Completed Evaluation Report</td></tr>
		<tr>
            <td style="border:none; font-size:12pt;" align="left" colspan="5">Rundate : {{ carbon\Carbon::now()->format('M d Y - h:i a') }}</td>
        </tr>
		<tr>
		    <td style="border:none; font-size:12pt;" align="left" colspan="5">Run by : {{ Auth::user()->getFullNameLNfirst() }}</td>
        </tr>
	</table>

	<table width="100%" border="1" cellpadding="2" cellspacing="1" style="font-size:10pt; width:836pt; line-height:16pt;">

        @foreach($data as $key => $extension_service)
            <tr>
                <td style="border-bottom:none;" colspan="5"><strong>Extension Service: {{ $key }}</strong></td>
            </tr>
            {{-- lagay mo yung column name dto na need, like webinar title --}}
            <tr style="text-align: center;">
                <td style="border-bottom:none;" rowspan="2"><strong>Webinar Title</strong></td>
                <td style="border-bottom:none;" rowspan="2"><strong>OR NUMBER</strong></td>
                <td style="border-bottom:none;" colspan="2"><strong>ACCOUNT</strong></td>
                <td style="border-bottom:none;" rowspan="2"><strong>AMOUNT</strong></td>
            </tr>
            <tr style="text-align: center;">
                <td style="border-bottom:none;"><strong>CODE</strong></td>
                <td style="border-bottom:none;"><strong>NAME</strong></td>
            </tr>
            {{-- hanggang dto --}}
            @foreach($extension_service as $webinar)
                <tr>
                    <td style="border-bottom:none;" colspan="5"><strong>Webinar Title: {{ $webinar[0]->title }}</strong></td>
                    {{-- dagdagan mo pa to based dun sa header --}}
                </tr>
                {{-- dito yung users --}}
                @foreach($webinar as $user)
                <tr>
                    <td>{{ $user->last_name . ', ' . $user->first_name . ' ' . $user->middle_name[0] }}</td>
                </tr>
                @endforeach
            @endforeach
        @endforeach

        <tr><td align="right" colspan="5"></td></tr>
	</table>
</div>
<?php
    // header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    // header("Content-Disposition: attachment; filename=".$filename.".xls");
    // header("Pragma: no-cache");
    // header("Expires: 0");
?>
