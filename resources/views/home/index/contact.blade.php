@extends('home.layouts.home')

@section('content')
    <div class="main">

        <!--contact_page start-->
        <div class="contact_page">
            <!--contact_items start-->
            <div class="contact_items">
                <!--grey_bar start-->
                <div class="grey_bar">
                    <!--breadcrumbs start-->
                    <div id="breadcrumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>» </li>
                            <li>Contact</li>
                        </ul>
                    </div>
                    <!--breadcrumbs end-->
                    <h2>
                        Contact Us
                    </h2>
                </div>
                <!--grey_bar end-->
                <h2>
                    Drop Us A Line</h2>
                <br />
                <p>
                    Cras nunc mi, facilisis nec malesuada eu, egestas eu libero. Sed semper suscipit
                    nulla. Cras sed eros at urna aliquet pharetra id ut augue. Curabitur tincidunt vulputate
                    ultricies. Donec vehicula sodales suscipit. Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Aenean lectus tellus, consectetur auctor porttitor pulvinar, sollicitudin
                    vel nisi. Vivamus congue iaculis est nec condimentum. Suspendisse velit risus, euismod
                    vel blandit id, laoreet a quam.</p>
                <div class="formblock">
                    <input name="name" type="text" id="name" onclick="this.value=''" value="Name" />
                </div>
                <div class="formblock">
                    <input name="email" type="text" id="email" onclick="this.value=''" value="Email" />
                </div>
                <div class="formblock">
                    <textarea name="message" id="message" cols="" rows="" onclick="this.value=''" class="textarea">Message</textarea>
                    <div class="clearfix">
                    </div>
                    <br />
                    <div class="send_btn" id="send-message">
                        <a href="#">Send</a>
                    </div>
                    <img src="{{asset('home/images/sending.gif')}}" id="img-sending" alt="sending message..." />
                    <div id="mail-send-msg">
                    </div>
                </div>
            </div>
            <!--contact_items end-->
            <!--contact_sidebar end-->
            <div class="contact_sidebar">
                <!--address start-->
                <div id="address">
                    <h2>
                        Our Address</h2>
                    <ul>
                        <li>1600 Amphihair Parkveiw</li>
                        <li>Mountain View, CA 94043</li>
                        <li>
                            <br />
                        </li>
                        <li>Email: <a href="#">admin@egrappler.com</a></li>
                        <li>Website: <a href="#">http://www.egrappler.com</a></li>
                        <li>Phone: 1-800-123-4567</li>
                        <li>Fax: 1-800-123-4567</li>
                    </ul>
                </div>
                <!--address end-->
                <div class="clearfix">
                </div>
                <!--map start-->
                <div class="map">
                    <iframe width="260" height="240" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0" src="http://maps.google.be/maps?f=q&amp;source=s_q&amp;hl=nl&amp;geocode=&amp;q=Apple+Inc,+Infinite+Loop,+Cupertino,+Calif,+United+States&amp;aq=0&amp;sll=50.805935,4.432983&amp;sspn=8.007705,23.939209&amp;vpsrc=6&amp;ie=UTF8&amp;hq=Apple+Inc,&amp;hnear=Infinite+Loop,+Cupertino,+California+95014,+Verenigde+Staten&amp;ll=37.329662,-122.031112&amp;spn=0.006295,0.006295&amp;output=embed">
                    </iframe>
                </div>
                <!--map end-->
            </div>
            <!--contact_sidebar end-->
        </div>
        <!--contact_page end-->

    </div>

@endsection