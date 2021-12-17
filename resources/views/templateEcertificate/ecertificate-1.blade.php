<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <style>
            * {
                margin:0;
                padding:0
            }
            body {
                margin: 0;
                height: 8.27in;
                width: 11.69in;
                background-image:url('assets/template/ecertificate/{{ $properties->background_template }}');
                background-size: 11.69in 8.27in; /* Not sure whether it works with DOMPDF. So, using a background of actual size. */
                background-repeat: no-repeat;
            }
            .name {
                position: fixed;
                width: 100%;
                {{ $properties->name }}
            }
            .date {
                position: fixed;
                width: 100%;
                {{ $properties->date }}
            }

        </style>

    </head>
    <body>
        <div class="name">{{ $name }}</div>
        <div class="date">{{ $date }}</div>
    </body>
</html>
