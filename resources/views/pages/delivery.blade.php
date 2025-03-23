@extends ('master')
@section('css/title')
<link rel="stylesheet" href="{{ asset('css/pages/delivery.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/subscribeSection.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/instagramSection.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/breadcrumbNav.css') }}">
<title>Catalog</title>
@endsection
@section('content')
    @php
    $pages = [
        ['name' => 'Home', 'url' => "/"],
        ['name' => 'Delivery', 'url' => "/delivery"]
    ];
    @endphp
    @include('components.breadcrumbSection', ['pages' => $pages])
    <!-- Delivery section -->
    <div class="delivery-container">
        <div class="delivery-content">
            <div class="delivery-infor-content">
                <div class="dilivery-infor">
                    <p class="first-title title">Delivery Info</p>
                    <p class="text">A successful marketing plan
                        relies heavily on the pulling-power of
                        advertising copy. Writing result-oriented ad
                        copy is difficult, as it must appeal to,
                        entice, and convince consumers to take
                        action. There is no magic formula to write
                        perfect ad copy; it is based on a number of
                        factors, including ad placement,
                        demographic, even the consumer's mood when
                        they see your ad.</p>
                    <p class="title">What's a Rich Text element?</p>
                    <p class="text">The rich text element allows you
                        to create and format headings, paragraphs,
                        blockquotes, images, and video all in one
                        place instead of having to add and format
                        them individually. Just double-click and
                        easily create content.</p>
                    <p class="title">Static and dynamic content
                        editing</p>
                    <p class="text">A rich text element can be used
                        with static or dynamic content. For static
                        content, just drop it into any page and
                        begin editing.</p>
                    <ul class="ul-li-text">
                        <li>Beautifully Designed</li>
                        <li>100% Responsive</li>
                        <li>CMS Content</li>
                        <li>Smooth Animations</li>
                    </ul>
                    <p class="text">For dynamic content, add a rich
                        text field to any collection and then
                        connect a rich text element to that field in
                        the settings panel. Voila!</p>
                    <p class="title">How to customize formatting for
                        each rich text</p>
                    <p class="text">Headings, paragraphs,
                        blockquotes, figures, images, and figure
                        captions can all be styled after a class is
                        added to the rich text element using the
                        "When inside of" nested selector system.</p>
                </div>
                <div class="call-to-contact-us">
                    <div class="call-to-contact-us-content">
                        <div class="padding-contact-us-content">
                            <p class="question-text">Can't Find the
                                Answer <br>to Your Question?</p>
                            <a href="/contacts"
                                class="btn-call-to-contact-us">Contact
                                Us</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End delivery section -->
    @include('components.subscribeSection')
    @include('components.instagramSection')
@endsection