<div class="max-w-full">
    {{-- Because she competes with no one, no one can compete with her.--}}
    <!-- so may 4 yung slides nya nung main tapos yung mga mini ganon den -->

    <div class="w-full  bg-gray-400 h-screen rounded-sm flex">
    <!-- ---------------------------------->
    <div id="slider">
   <input type="radio" name="slider" id="slide1" checked>
   <input type="radio" name="slider" id="slide2">
   <input type="radio" name="slider" id="slide3">
   <input type="radio" name="slider" id="slide4">
   <div id="slides">
      <div id="overflow">
         <div class="inner">
            <div class="slide slide_1">
               <div class="slide-content">
                  <img src="http://localhost:8000/images/SampleADD.png">
               </div>
            </div>
            <div class="slide slide_2 items-center">
               <div class="slide-content">
                <form id="form" style="width:1000px; height:550px; background-color:white;">
                    <!-- ---------------------------------->
                    <!-- forms parasa maliliit na slider 1 at 2 -->
                    <!-- slider mini 1 to -->
                    <div id="slider1" style="float:left; margin-left:10%; margin-top:5%;">
                        <input type="radio" name="slider1" id="slide11" checked>
                        <input type="radio" name="slider1" id="slide21">
                        <input type="radio" name="slider1" id="slide31">
                        <input type="radio" name="slider1" id="slide41">
                        <div id="slides1">
                            <div id="overflow1">
                                <div class="inner1">
                                    <!-- dito sa inner ilalagay ang mga <forms> <img> at iba ppa -->
                                    <div class="slide1 slide_11">
                                    <div class="slide-content1">
                                        <!-- forms atbp img ng minislide1-slide1 -->
                                        <img src="http://localhost:8000/images/SampleKontent.png">
                                    </div>
                                    </div>
                                    <div class="slide1 slide_21">
                                    <div class="slide-content1">
                                        <!-- forms img atbp ng minislide1-slide2 -->
                                        <img src="http://localhost:8000/images/SampleKontent.png">
                                    </div>
                                    </div>
                                    <div class="slide1 slide_31">
                                    <div class="slide-content1">
                                        <!-- forms img atbp ng minislide1-slide3 -->
                                        <img src="http://localhost:8000/images/SampleKontent.png">
                                    </div>
                                    </div>
                                    <div class="slide1 slide_41">
                                    <div class="slide-content1">
                                        <!-- forms img atbp ng minislide1-slide4 -->
                                        <img src="http://localhost:8000/images/SampleKontent.png">
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="controls1" style="visibility:hidden;">
                            <label for="slide11"></label>
                            <label for="slide21"></label>
                            <label for="slide31"></label>
                            <label for="slide41"></label>
                        </div>
                        <div id="bullets1">
                            <label for="slide11" ></label>
                            <label for="slide21" ></label>
                            <label for="slide31" ></label>
                            <label for="slide41" ></label>
                        </div>
                        </div>
                   <!-- STYLES NG minislider1 to -->
                    <style>
                        #slider1 {
                        margin: 0 auto;
                        width: 300px;
                        max-width: 100%;
                        text-align: center;
                        }
                        #slider1 input[type=radio] {
                        display: none;
                        }
                        #slider1 label {
                        cursor:pointer;
                        text-decoration: none;
                        }
                        #slides1 {
                        padding: 10px;
                        border: 3px solid #ccc;
                        background: #fff;
                        z-index: 1;
                        }
                        #overflow1 {
                        width: 100%;
                        overflow: hidden;
                        }
                        #slide11:checked ~ #slides1 .inner1 {
                        margin-left: 0;
                        }
                        #slide21:checked ~ #slides1 .inner1 {
                        margin-left: -100%;
                        }
                        #slide31:checked ~ #slides1 .inner1 {
                        margin-left: -200%;
                        }
                        #slide41:checked ~ #slides1 .inner1 {
                        margin-left: -300%;
                        }
                        #slides1 .inner1 {
                        transition: margin-left 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
                        width: 400%;
                        line-height: 0;
                        height: 300px;
                        }
                        #slides1 .slide1 {
                        width: 25%;
                        float:left;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 100%;
                        color: #fff;
                        }
                        #slides1 .slide_11 {
                        background: #00171F;
                        }
                        #slides1 .slide_21 {
                        background: #00171F;
                        }
                        #slides1 .slide_31 {
                        background: #00171F;
                        }
                        #slides1 .slide_41 {
                        background: #00171F;
                        }
                        #controls1 {
                        margin: -180px 0 0 0;
                        width: 100%;
                        height: 50px;
                        z-index: 3;
                        position: relative;
                        }
                        #controls1 label {
                        transition: opacity 0.2s ease-out;
                        display: none;
                        width: 50px;
                        height: 50px;
                        opacity: .4;
                        }
                        #controls1 label:hover {
                        opacity: 1;
                        }
                        #slide11:checked ~ #controls1 label:nth-child(2),
                        #slide21:checked ~ #controls1 label:nth-child(3),
                        #slide31:checked ~ #controls1 label:nth-child(4),
                        #slide41:checked ~ #controls1 label:nth-child(1) {
                        background: url(https://image.flaticon.com/icons/svg/130/130884.svg) no-repeat;
                        float:right;
                        margin: 0 -50px 0 0;
                        display: block;
                        }
                        #slide11:checked ~ #controls1 label:nth-last-child(1),
                        #slide21:checked ~ #controls1 label:nth-last-child(4),
                        #slide31:checked ~ #controls1 label:nth-last-child(3),
                        #slide41:checked ~ #controls1 label:nth-last-child(2) {
                        background: url(https://image.flaticon.com/icons/svg/130/130882.svg) no-repeat;
                        float:left;
                        margin: 0 0 0 -50px;
                        display: block;
                        }
                        #bullets1 {
                        margin: 150px 0 0;
                        text-align: center;
                        }
                        #bullets1 label {
                        display: inline-block;
                        width: 10px;
                        height: 10px;
                        border-radius:100%;
                        background: #ccc;
                        margin: 0 10px;
                        }
                        #slide11:checked ~ #bullets1 label:nth-child(1),
                        #slide21:checked ~ #bullets1 label:nth-child(2),
                        #slide31:checked ~ #bullets1 label:nth-child(3),
                        #slide41:checked ~ #bullets1 label:nth-child(4) {
                        background: #444;
                        }
                        @media screen and (max-width: 900px) {
                        #slide11:checked ~ #controls1 label:nth-child(2),
                        #slide21:checked ~ #controls1 label:nth-child(3),
                        #slide31:checked ~ #controls1 label:nth-child(4),
                        #slide41:checked ~ #controls1 label:nth-child(1),
                        #slide11:checked ~ #controls1 label:nth-last-child(2),
                        #slide21:checked ~ #controls1 label:nth-last-child(3),
                        #slide31:checked ~ #controls1 label:nth-last-child(4),
                        #slide41:checked ~ #controls1 label:nth-last-child(1) {
                            margin: 0;
                        }
                        #slides1 {
                            max-width: calc(100% - 140px);
                            margin: 0 auto;
                        }
                        }
                    </style>
                    <!-- slider mini 1 to -->
                    <!-- slider mini 2 to -->
                    <div id="slider2" style="float:right; margin-right:10%; margin-top:5%;">
                        <input type="radio" name="slider2" id="slide12" checked>
                        <input type="radio" name="slider2" id="slide22">
                        <input type="radio" name="slider2" id="slide32">
                        <input type="radio" name="slider2" id="slide42">
                        <div id="slides2">
                            <div id="overflow2">
                                <div class="inner2">
                                    <!-- dito sa inner ilalagay ang mga <forms> <img> at iba ppa -->
                                    <div class="slide2 slide_12">
                                    <div class="slide-content2">
                                        <!-- forms img atbp ng minislide2-slide1 -->
                                        <img src="http://localhost:8000/images/SampleKontent.png">
                                    </div>
                                    </div>
                                    <div class="slide2 slide_22">
                                    <div class="slide-content2">
                                        <!-- forms img atbp ng minislide2-slide3 -->
                                        <img src="http://localhost:8000/images/SampleKontent.png">
                                    </div>
                                    </div>
                                    <div class="slide2 slide_32">
                                    <div class="slide-content1">
                                        <!-- forms img atbp ng minislide2-slide3 -->
                                        <img src="http://localhost:8000/images/SampleKontent.png">
                                    </div>
                                    </div>
                                    <div class="slide2 slide_42">
                                    <div class="slide-content2">
                                        <!-- forms img atbp ng minislide2-slide4 -->
                                        <img src="http://localhost:8000/images/SampleKontent.png">
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="controls2" style="visibility:hidden;">
                            <label for="slide12"></label>
                            <label for="slide22"></label>
                            <label for="slide32"></label>
                            <label for="slide42"></label>
                        </div>
                        <div id="bullets2">
                            <label for="slide12" ></label>
                            <label for="slide22" ></label>
                            <label for="slide32" ></label>
                            <label for="slide42" ></label>
                        </div>
                        </div>
                    <!-- STYLES NG minislider2 to -->
                    <style>
                        #slider2 {
                        margin: 0 auto;
                        width: 300px;
                        max-width: 100%;
                        text-align: center;
                        }
                        #slider2 input[type=radio] {
                        display: none;
                        }
                        #slider2 label {
                        cursor:pointer;
                        text-decoration: none;
                        }
                        #slides2 {
                        padding: 10px;
                        border: 3px solid #ccc;
                        background: #fff;
                        z-index: 1;
                        }
                        #overflow2 {
                        width: 100%;
                        overflow: hidden;
                        }
                        #slide12:checked ~ #slides2 .inner2 {
                        margin-left: 0;
                        }
                        #slide22:checked ~ #slides2 .inner2 {
                        margin-left: -100%;
                        }
                        #slide32:checked ~ #slides2 .inner2 {
                        margin-left: -200%;
                        }
                        #slide42:checked ~ #slides2 .inner2 {
                        margin-left: -300%;
                        }
                        #slides2 .inner2 {
                        transition: margin-left 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
                        width: 400%;
                        line-height: 0;
                        height: 300px;
                        }
                        #slides2 .slide2 {
                        width: 25%;
                        float:left;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 100%;
                        color: #fff;
                        }
                        #slides2 .slide_12 {
                        background: #00171F;
                        }
                        #slides2 .slide_22 {
                        background: #00171F;
                        }
                        #slides2 .slide_32 {
                        background: #00171F;
                        }
                        #slides2 .slide_42 {
                        background: #00171F;
                        }
                        #controls2 {
                        margin: -180px 0 0 0;
                        width: 100%;
                        height: 50px;
                        z-index: 3;
                        position: relative;
                        }
                        #controls2 label {
                        transition: opacity 0.2s ease-out;
                        display: none;
                        width: 50px;
                        height: 50px;
                        opacity: .4;
                        }
                        #controls2 label:hover {
                        opacity: 1;
                        }
                        #slide12:checked ~ #controls2 label:nth-child(2),
                        #slide22:checked ~ #controls2 label:nth-child(3),
                        #slide32:checked ~ #controls2 label:nth-child(4),
                        #slide42:checked ~ #controls2 label:nth-child(1) {
                        background: url(https://image.flaticon.com/icons/svg/130/130884.svg) no-repeat;
                        float:right;
                        margin: 0 -50px 0 0;
                        display: block;
                        }
                        #slide12:checked ~ #controls2 label:nth-last-child(1),
                        #slide22:checked ~ #controls2 label:nth-last-child(4),
                        #slide32:checked ~ #controls2 label:nth-last-child(3),
                        #slide42:checked ~ #controls2 label:nth-last-child(2) {
                        background: url(https://image.flaticon.com/icons/svg/130/130882.svg) no-repeat;
                        float:left;
                        margin: 0 0 0 -50px;
                        display: block;
                        }
                        #bullets2 {
                        margin: 150px 0 0;
                        text-align: center;
                        }
                        #bullets2 label {
                        display: inline-block;
                        width: 10px;
                        height: 10px;
                        border-radius:100%;
                        background: #ccc;
                        margin: 0 10px;
                        }
                        #slide12:checked ~ #bullets2 label:nth-child(1),
                        #slide22:checked ~ #bullets2 label:nth-child(2),
                        #slide32:checked ~ #bullets2 label:nth-child(3),
                        #slide42:checked ~ #bullets2 label:nth-child(4) {
                        background: #444;
                        }
                        @media screen and (max-width: 900px) {
                        #slide12:checked ~ #controls2 label:nth-child(2),
                        #slide22:checked ~ #controls2 label:nth-child(3),
                        #slide32:checked ~ #controls2 label:nth-child(4),
                        #slide42:checked ~ #controls2 label:nth-child(1),
                        #slide12:checked ~ #controls2 label:nth-last-child(2),
                        #slide22:checked ~ #controls2 label:nth-last-child(3),
                        #slide32:checked ~ #controls2 label:nth-last-child(4),
                        #slide42:checked ~ #controls2 label:nth-last-child(1) {
                            margin: 0;
                        }
                        #slides2 {
                            max-width: calc(100% - 140px);
                            margin: 0 auto;
                        }
                        }
                    </style>
                    <!-- slider mini 2 to -->
                    <!-- forms parasa maliliit na slider 1 at 2 -->
                    <!-- ---------------------------------->
                </form>
               </div>
            </div>
            <div class="slide slide_3">
               <div class="slide-content">
                    <img src="http://localhost:8000/images/SampleADD.png">
               </div>
            </div>
            <div class="slide slide_4">
               <div class="slide-content">
               <form id="form" style="width:1000px; height:550px; background-color:white;">
                  <!-- ---------------------------------->
                    <!-- forms parasa maliliit na slider 3 at 4 -->
                    <!-- slider mini 3 to -->
                    <div id="slider3" style="float:left; margin-left:10%; margin-top:5%;">
                        <input type="radio" name="slider3" id="slide13" checked>
                        <input type="radio" name="slider3" id="slide23">
                        <input type="radio" name="slider3" id="slide33">
                        <input type="radio" name="slider3" id="slide43">
                        <div id="slides3">
                            <div id="overflow3">
                                <div class="inner3">
                                    <!-- dito sa inner ilalagay ang mga <form> <img> atbp -->
                                    <div class="slide3 slide_13">
                                    <div class="slide-content3">
                                        <!-- forms img atbp ng minislide3-slide1 -->
                                        <img src="http://localhost:8000/images/SampleKontent.png">
                                    </div>
                                    </div>
                                    <div class="slide3 slide_23">
                                    <div class="slide-content1">
                                        <!-- forms img atbp ng minislide3-slide2 -->
                                        <img src="http://localhost:8000/images/SampleKontent.png">
                                    </div>
                                    </div>
                                    <div class="slide3 slide_33">
                                    <div class="slide-content3">
                                       <!-- forms img atbp ng minislide3-slide3 -->
                                       <img src="http://localhost:8000/images/SampleKontent.png">
                                    </div>
                                    </div>
                                    <div class="slide3 slide_43">
                                    <div class="slide-content3">
                                        <!-- forms img atbp ng minislide4-slide4 -->
                                        <img src="http://localhost:8000/images/SampleKontent.png">
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="controls3" style="visibility:hidden;">
                            <label for="slide13"></label>
                            <label for="slide23"></label>
                            <label for="slide33"></label>
                            <label for="slide43"></label>
                        </div>
                        <div id="bullets3">
                            <label for="slide13" ></label>
                            <label for="slide23" ></label>
                            <label for="slide33" ></label>
                            <label for="slide43" ></label>
                        </div>
                        </div>
                    <!-- STYLE NG minislider 3 to -->
                    <style>
                        #slider3 {
                        margin: 0 auto;
                        width: 300px;
                        max-width: 100%;
                        text-align: center;
                        }
                        #slider3 input[type=radio] {
                        display: none;
                        }
                        #slider3 label {
                        cursor:pointer;
                        text-decoration: none;
                        }
                        #slides3 {
                        padding: 10px;
                        border: 3px solid #ccc;
                        background: #fff;
                        z-index: 1;
                        }
                        #overflow3 {
                        width: 100%;
                        overflow: hidden;
                        }
                        #slide13:checked ~ #slides3 .inner3 {
                        margin-left: 0;
                        }
                        #slide23:checked ~ #slides3 .inner3 {
                        margin-left: -100%;
                        }
                        #slide33:checked ~ #slides3 .inner3 {
                        margin-left: -200%;
                        }
                        #slide43:checked ~ #slides3 .inner3 {
                        margin-left: -300%;
                        }
                        #slides3 .inner3 {
                        transition: margin-left 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
                        width: 400%;
                        line-height: 0;
                        height: 300px;
                        }
                        #slides3 .slide3 {
                        width: 25%;
                        float:left;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 100%;
                        color: #fff;
                        }
                        #slides3 .slide_13 {
                        background: #00171F;
                        }
                        #slides3 .slide_23 {
                        background: #00171F;
                        }
                        #slides3 .slide_33 {
                        background: #00171F;
                        }
                        #slides3 .slide_43 {
                        background: #00171F;
                        }
                        #controls3 {
                        margin: -180px 0 0 0;
                        width: 100%;
                        height: 50px;
                        z-index: 3;
                        position: relative;
                        }
                        #controls3 label {
                        transition: opacity 0.2s ease-out;
                        display: none;
                        width: 50px;
                        height: 50px;
                        opacity: .4;
                        }
                        #controls3 label:hover {
                        opacity: 1;
                        }
                        #slide13:checked ~ #controls3 label:nth-child(2),
                        #slide23:checked ~ #controls3 label:nth-child(3),
                        #slide33:checked ~ #controls3 label:nth-child(4),
                        #slide43:checked ~ #controls3 label:nth-child(1) {
                        background: url(https://image.flaticon.com/icons/svg/130/130884.svg) no-repeat;
                        float:right;
                        margin: 0 -50px 0 0;
                        display: block;
                        }
                        #slide13:checked ~ #controls3 label:nth-last-child(1),
                        #slide23:checked ~ #controls3 label:nth-last-child(4),
                        #slide33:checked ~ #controls3 label:nth-last-child(3),
                        #slide43:checked ~ #controls3 label:nth-last-child(2) {
                        background: url(https://image.flaticon.com/icons/svg/130/130882.svg) no-repeat;
                        float:left;
                        margin: 0 0 0 -50px;
                        display: block;
                        }
                        #bullets3 {
                        margin: 150px 0 0;
                        text-align: center;
                        }
                        #bullets3 label {
                        display: inline-block;
                        width: 10px;
                        height: 10px;
                        border-radius:100%;
                        background: #ccc;
                        margin: 0 10px;
                        }
                        #slide13:checked ~ #bullets3 label:nth-child(1),
                        #slide23:checked ~ #bullets3 label:nth-child(2),
                        #slide33:checked ~ #bullets3 label:nth-child(3),
                        #slide43:checked ~ #bullets3 label:nth-child(4) {
                        background: #444;
                        }
                        @media screen and (max-width: 900px) {
                        #slide13:checked ~ #controls3 label:nth-child(2),
                        #slide23:checked ~ #controls3 label:nth-child(3),
                        #slide33:checked ~ #controls3 label:nth-child(4),
                        #slide43:checked ~ #controls3 label:nth-child(1),
                        #slide13:checked ~ #controls3 label:nth-last-child(2),
                        #slide23:checked ~ #controls3 label:nth-last-child(3),
                        #slide33:checked ~ #controls3 label:nth-last-child(4),
                        #slide43:checked ~ #controls3 label:nth-last-child(1) {
                            margin: 0;
                        }
                        #slides3 {
                            max-width: calc(100% - 140px);
                            margin: 0 auto;
                        }
                        }
                   
                   </style>
                    <!-- slider mini 3 to -->
                    <!-- slider mini 4 to -->
                    <div id="slider4" style="float:right; margin-right:10%; margin-top:5%;">
                        <input type="radio" name="slider4" id="slide14" checked>
                        <input type="radio" name="slider4" id="slide24">
                        <input type="radio" name="slider4" id="slide34">
                        <input type="radio" name="slider4" id="slide44">
                        <div id="slides4">
                            <div id="overflow4">
                                <div class="inner4">
                                    <!-- dito sa inner ilalagay ang mga <form> <img> atbp -->
                                    <div class="slide4 slide_14">
                                    <div class="slide-content4">
                                        <!-- forms img atbp ng minislide4-slide1 -->
                                        <img src="http://localhost:8000/images/SampleKontent.png">
                                    </div>
                                    </div>
                                    <div class="slide4 slide_24">
                                    <div class="slide-content4">
                                        <!-- forms img atbp ng minislide4-slide2 -->
                                        <img src="http://localhost:8000/images/SampleKontent.png">
                                    </div>
                                    </div>
                                    <div class="slide4 slide_34">
                                    <div class="slide-content4">
                                        <!-- forms img atbp ng minislide4-slide3 -->
                                        <img src="http://localhost:8000/images/SampleKontent.png">
                                    </div>
                                    </div>
                                    <div class="slide4 slide_44">
                                    <div class="slide-content4">
                                        <!-- forms img atbp ng minislide4-slide5 -->
                                        <img src="http://localhost:8000/images/SampleKontent.png">
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="controls4" style="visibility:hidden;">
                            <label for="slide14"></label>
                            <label for="slide24"></label>
                            <label for="slide34"></label>
                            <label for="slide44"></label>
                        </div>
                        <div id="bullets4">
                            <label for="slide14" ></label>
                            <label for="slide24" ></label>
                            <label for="slide34" ></label>
                            <label for="slide44" ></label>
                        </div>
                        </div>
                        <!-- STYLES NG MINISLIDE 4 -->
                    <style>
                        #slider4 {
                        margin: 0 auto;
                        width: 300px;
                        max-width: 100%;
                        text-align: center;
                        }
                        #slider4 input[type=radio] {
                        display: none;
                        }
                        #slider4 label {
                        cursor:pointer;
                        text-decoration: none;
                        }
                        #slides4 {
                        padding: 10px;
                        border: 3px solid #ccc;
                        background: #fff;
                        z-index: 1;
                        }
                        #overflow4 {
                        width: 100%;
                        overflow: hidden;
                        }
                        #slide14:checked ~ #slides4 .inner4 {
                        margin-left: 0;
                        }
                        #slide24:checked ~ #slides4 .inner4 {
                        margin-left: -100%;
                        }
                        #slide34:checked ~ #slides4 .inner4 {
                        margin-left: -200%;
                        }
                        #slide44:checked ~ #slides4 .inner4 {
                        margin-left: -300%;
                        }
                        #slides4 .inner4 {
                        transition: margin-left 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
                        width: 400%;
                        line-height: 0;
                        height: 300px;
                        }
                        #slides4 .slide4 {
                        width: 25%;
                        float:left;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 100%;
                        color: #fff;
                        }
                        #slides4 .slide_14 {
                        background: #00171F;
                        }
                        #slides4 .slide_24 {
                        background: #00171F;
                        }
                        #slides4 .slide_34 {
                        background: #00171F;
                        }
                        #slides4 .slide_44 {
                        background: #00171F;
                        }
                        #controls4 {
                        margin: -180px 0 0 0;
                        width: 100%;
                        height: 50px;
                        z-index: 3;
                        position: relative;
                        }
                        #controls4 label {
                        transition: opacity 0.2s ease-out;
                        display: none;
                        width: 50px;
                        height: 50px;
                        opacity: .4;
                        }
                        #controls4 label:hover {
                        opacity: 1;
                        }
                        #slide14:checked ~ #controls2 label:nth-child(2),
                        #slide24:checked ~ #controls2 label:nth-child(3),
                        #slide34:checked ~ #controls2 label:nth-child(4),
                        #slide44:checked ~ #controls2 label:nth-child(1) {
                        background: url(https://image.flaticon.com/icons/svg/130/130884.svg) no-repeat;
                        float:right;
                        margin: 0 -50px 0 0;
                        display: block;
                        }
                        #slide14:checked ~ #controls4 label:nth-last-child(1),
                        #slide24:checked ~ #controls4 label:nth-last-child(4),
                        #slide34:checked ~ #controls4 label:nth-last-child(3),
                        #slide44:checked ~ #controls4 label:nth-last-child(2) {
                        background: url(https://image.flaticon.com/icons/svg/130/130882.svg) no-repeat;
                        float:left;
                        margin: 0 0 0 -50px;
                        display: block;
                        }
                        #bullets4 {
                        margin: 150px 0 0;
                        text-align: center;
                        }
                        #bullets4 label {
                        display: inline-block;
                        width: 10px;
                        height: 10px;
                        border-radius:100%;
                        background: #ccc;
                        margin: 0 10px;
                        }
                        #slide14:checked ~ #bullets4 label:nth-child(1),
                        #slide24:checked ~ #bullets4 label:nth-child(2),
                        #slide34:checked ~ #bullets4 label:nth-child(3),
                        #slide44:checked ~ #bullets4 label:nth-child(4) {
                        background: #444;
                        }
                        @media screen and (max-width: 900px) {
                        #slide14:checked ~ #controls4 label:nth-child(2),
                        #slide24:checked ~ #controls4 label:nth-child(3),
                        #slide34:checked ~ #controls4 label:nth-child(4),
                        #slide44:checked ~ #controls4 label:nth-child(1),
                        #slide14:checked ~ #controls4 label:nth-last-child(2),
                        #slide24:checked ~ #controls4 label:nth-last-child(3),
                        #slide34:checked ~ #controls4 label:nth-last-child(4),
                        #slide44:checked ~ #controls4 label:nth-last-child(1) {
                            margin: 0;
                        }
                        #slides4 {
                            max-width: calc(100% - 140px);
                            margin: 0 auto;
                        }
                        }
                    </style>
                    <!-- slider mini 4 to -->
                    <!-- forms parasa maliliit na slider 3 at 4-->
                    <!-- ---------------------------------->
                </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="controls">
      <label for="slide1"></label>
      <label for="slide2"></label>
      <label for="slide3"></label>
      <label for="slide4"></label>
   </div>
   <div id="bullets">
      <label for="slide1" ></label>
      <label for="slide2" ></label>
      <label for="slide3" ></label>
      <label for="slide4" ></label>
    </div>
    </div>
    <style>
#slider {
   margin: 0 auto;
   width: 90%;
   max-width: 100%;
   text-align: center;
}
#slider input[type=radio] {
   display: none;
}
#slider label {
   cursor:pointer;
   text-decoration: none;
}
#slides {
   padding: 10px;
   border: 3px solid #ccc;
   background: #fff;
   z-index: 1;
}
#overflow {
   width: 100%;
   overflow: hidden;
}
#slide1:checked ~ #slides .inner {
   margin-left: 0;
}
#slide2:checked ~ #slides .inner {
   margin-left: -100%;
}
#slide3:checked ~ #slides .inner {
   margin-left: -200%;
}
#slide4:checked ~ #slides .inner {
   margin-left: -300%;
}
#slides .inner {
   transition: margin-left 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
   width: 400%;
   line-height: 0;
   height: 600px;
}
#slides .slide {
   width: 25%;
   float:left;
   display: flex;
   justify-content: center;
   align-items: center;
   height: 100%;
   color: #fff;
}
#slides .slide_1 {
   background: #00171F;
}
#slides .slide_2 {
   background: white;
}
#slides .slide_3 {
   background: #00171F;
}
#slides .slide_4 {
   background: white;
}
#controls {
   margin: -180px 0 0 0;
   width: 100%;
   height: 50px;
   z-index: 3;
   position: relative;
}
#controls label {
   transition: opacity 0.2s ease-out;
   display: none;
   width: 50px;
   height: 50px;
   opacity: .4;
}
#controls label:hover {
   opacity: 1;
}
#slide1:checked ~ #controls label:nth-child(2),
#slide2:checked ~ #controls label:nth-child(3),
#slide3:checked ~ #controls label:nth-child(4),
#slide4:checked ~ #controls label:nth-child(1) {
   background: url(https://image.flaticon.com/icons/svg/130/130884.svg) no-repeat;
   float:right;
   margin: 0 -50px 0 0;
   display: block;
}
#slide1:checked ~ #controls label:nth-last-child(1),
#slide2:checked ~ #controls label:nth-last-child(4),
#slide3:checked ~ #controls label:nth-last-child(3),
#slide4:checked ~ #controls label:nth-last-child(2) {
   background: url(https://image.flaticon.com/icons/svg/130/130882.svg) no-repeat;
   float:left;
   margin: 0 0 0 -50px;
   display: block;
}
#bullets {
   margin: 150px 0 0;
   text-align: center;
}
#bullets label {
   display: inline-block;
   width: 10px;
   height: 10px;
   border-radius:100%;
   background: #ccc;
   margin: 0 10px;
}
#slide1:checked ~ #bullets label:nth-child(1),
#slide2:checked ~ #bullets label:nth-child(2),
#slide3:checked ~ #bullets label:nth-child(3),
#slide4:checked ~ #bullets label:nth-child(4) {
   background: #444;
}
@media screen and (max-width: 900px) {
   #slide1:checked ~ #controls label:nth-child(2),
   #slide2:checked ~ #controls label:nth-child(3),
   #slide3:checked ~ #controls label:nth-child(4),
   #slide4:checked ~ #controls label:nth-child(1),
   #slide1:checked ~ #controls label:nth-last-child(2),
   #slide2:checked ~ #controls label:nth-last-child(3),
   #slide3:checked ~ #controls label:nth-last-child(4),
   #slide4:checked ~ #controls label:nth-last-child(1) {
      margin: 0;
   }
   #slides {
      max-width: calc(100% - 140px);
      margin: 0 auto;
   }
}
    </style>

    </div>
</div>