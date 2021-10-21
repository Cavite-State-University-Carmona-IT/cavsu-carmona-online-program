<div style="width:80%;">
	<table width="100%" border="0" cellpadding="2" cellspacing="1" style="width:836pt; line-height:16pt; text-decoration:underline;">
		<tr><td style="border:none; font-size:12pt; font-weight: bold;" align="middle" colspan="6">Cavite State University</td></tr>
		<tr><td style="border:none; font-size:12pt; font-weight: bold;" align="middle" colspan="6">Completed Evaluation Report</td></tr>
		<tr>
            <td style="border:none; font-size:12pt;" align="left" colspan="5">Rundate : {{ carbon\Carbon::now()->format('M d Y - h:i a') }}</td>
        </tr>
		<tr>
		    <td style="border:none; font-size:12pt; text-transform:capitalize;" align="left" colspan="5">Run by : {{ Auth::user()->getFullNameLNfirst() }}</td>
        </tr>
	</table>

	<table width="100%" border="1" cellpadding="2" cellspacing="1" style="font-size:10pt; width:836pt; line-height:16pt;">
    <?php $i=0; ?>
        @foreach($data as $key => $extension_service)
        @if($i==1)<tr>
                    <td style="text-align:center;" colspan="6">--------------------------------------</td>
                </tr>@endif
            <tr style="text-align: center;">
                <td style="border-bottom:none;" colspan="6" ><strong>Extension Service: {{ $key }}</strong></td>
            </tr>
            <tr style="text-align: center;">
                <td style="border-bottom:none;" colspan="2"><strong>WEBINAR</strong></td>
                <td style="border-bottom:none;" colspan="3"><strong>Name</strong></td>
                <td style="border-bottom:none;" rowspan="2"><strong>Date Completed</strong></td>
            </tr>
            <tr style="text-align: center;">
                <td style="border-bottom:none;" ><strong>Title</strong></td>
                <td style="border-bottom:none;" ><strong>Speaker</strong></td>
                <td style="border-bottom:none;" ><strong>Last Name</strong></td>
                <td style="border-bottom:none;" ><strong>First Name</strong></td>
                <td style="border-bottom:none;" ><strong>Middle Initial</strong></td>
            </tr >
            @foreach($extension_service as $webinar)
                <?php
                    $count = $webinar->count() + 1;
                ?>
                <tr style="text-align: center;">
                    <td style="border-bottom:none;"  rowspan="{{ $count }}"><strong>{{$webinar[0]->title}}</strong></td>
                    <td style="border-bottom:none;"  rowspan="{{ $count }}"><strong>{{$webinar[0]->speaker}}</strong></td>
                </tr>
                    @foreach($webinar as $user)
                    <tr style= "text-transform:capitalize;">
                        <td style="border-bottom:none; text-transform:capitalize;" >{{$user->last_name}}</td>
                        <td style="border-bottom:none; text-transform:capitalize;" >{{$user->first_name}}</td>
                        <td style="border-bottom:none; text-transform:capitalize; text-align:center;">{{$user->middle_name[0]}}</td>
                        <td style="border-bottom:none; text-transform:capitalize;text-align:center;">{{carbon\carbon::parse($user->date_completed)->format('d M, Y');}}</td>
                    </tr> 
                    @endforeach
            @endforeach
            <?php $i=1; ?>
        @endforeach
	</table>
</div>
<?php

    //---
    header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header("Content-Disposition: attachment; filename=filename=".carbon\carbon::now()->format('dmY_') ."report_completed_evaluation.xls");
    header("Pragma: no-cache");
    header("Expires: 0");
    //---
?>