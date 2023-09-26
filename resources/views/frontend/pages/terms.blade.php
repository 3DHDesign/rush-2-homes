@extends('components.layouts.master')
@section('content')
    <style>
        h4 {
            margin-top: 30px;
        }

        h5 {
            margin-top: 20px;
        }
    </style>
    <div class="breadcrumb">
        <div class="container">
            <div class="bread-crumb-head">
                <div class="breadcrumb-title">
                    <h2>Terms & Conditions</h2>
                </div>
                <div class="breadcrumb-list">
                    <ul>
                        <li><a href="{{ route('home') }}">Home </a></li>
                        <li>Terms & Conditions</li>
                    </ul>
                </div>
            </div>
            <div class="breadcrumb-border-img">
                <img src="{{ asset('assets/img/bg/line-bg.png') }}" alt="Line Image">
            </div>
        </div>
    </div>
    <div class="privacy-section section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="terms-policy">
                        <h4>Welcome to Rush 2 Homes!</h4>
                        <p class="aos" data-aos="fade-down">These terms and conditions outline the rules and regulations
                            for the use of Rush 2 Homes's Website, located at colombo.rush2homes.com.</p>
                        <p data-aos="fade-down">By accessing this website we assume you accept these terms and conditions.
                            Do not continue to use Rush 2 Homes if you do not agree to take all of the terms and conditions
                            stated on this page.</p>
                        <ul data-aos="fade-down">
                            <li><span><i class="fa-solid fa-circle-check"></i></span>To provide you with information and/or
                                services that you request from us;</li>
                            <li><span><i class="fa-solid fa-circle-check"></i></span>To contact you to provide the
                                information requested.</li>
                        </ul>
                        <p data-aos="fade-down">The following terminology applies to these Terms and Conditions, Privacy
                            Statement and Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you,
                            the person log on this website and compliant to the Company's terms and conditions. "The
                            Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us",
                            refers to both the Client and ourselves. All terms refer to the offer, acceptance and
                            consideration of payment necessary to undertake the process of our assistance to the Client in
                            the most appropriate manner for the express purpose of meeting the Client's needs in respect of
                            provision of the Company's stated services, in accordance with and subject to, prevailing law of
                            af. Any use of the above terminology or other words in the singular, plural, capitalization
                            and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>

                        <h4>Cookies</h4>
                        <p class="mb-0" data-aos="fade-down">We employ the use of cookies. By accessing Rush 2 Homes, you
                            agreed to use cookies in agreement with the Rush 2 Homes's Privacy Policy.</p>
                        <p class="mb-0" data-aos="fade-down">Most interactive websites use cookies to let us retrieve the
                            user's details for each visit. Cookies are used by our website to enable the functionality of
                            certain areas to make it easier for people visiting our website. Some of our
                            affiliate/advertising partners may also use cookies.</p>

                        <h4>License</h4>
                        <p class="mb-0" data-aos="fade-down">Unless otherwise stated, Rush 2 Homes and/or its licensors
                            own the intellectual property rights for all material on Rush 2 Homes. All intellectual property
                            rights are reserved. You may access this from Rush 2 Homes for your own personal use subjected
                            to restrictions set in these terms and conditions.</p>

                        <h5>You must not:</h5>
                        <ul data-aos="fade-down">
                            <li><span><i class="fa-solid fa-circle-check"></i></span>Republish material from Rush 2 Homes
                            </li>
                            <li><span><i class="fa-solid fa-circle-check"></i></span>Sell, rent or sub-license material from
                                Rush 2 Homes</li>
                            <li><span><i class="fa-solid fa-circle-check"></i></span>Reproduce, duplicate or copy material
                                from Rush 2 Homes</li>
                            <li><span><i class="fa-solid fa-circle-check"></i></span>Redistribute content from Rush 2 Homes
                            </li>
                        </ul>
                        <p class="mb-0" data-aos="fade-down">Parts of this website offer an opportunity for users to post
                            and exchange opinions and information in certain areas of the website. Rush 2 Homes does not
                            filter, edit, publish or review Comments prior to their presence on the website. Comments do not
                            reflect the views and opinions of Rush 2 Homes,its agents and/or affiliates. Comments reflect
                            the views and opinions of the person who post their views and opinions. To the extent permitted
                            by applicable laws, Rush 2 Homes shall not be liable for the Comments or for any liability,
                            damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or
                            appearance of the Comments on this website.</p>
                        <p class="mb-0" data-aos="fade-down">Rush 2 Homes reserves the right to monitor all Comments and
                            to remove any Comments which can be considered inappropriate, offensive or causes breach of
                            these Terms and Conditions.</p>
                        <h4>You warrant and represent that:</h4>
                        <ul data-aos="fade-down">
                            <li><span><i class="fa-solid fa-circle-check"></i></span>You are entitled to post the Comments
                                on our website and have all necessary licenses and consents to do so;
                            </li>
                            <li><span><i class="fa-solid fa-circle-check"></i></span>The Comments do not invade any
                                intellectual property right, including without limitation copyright, patent or trademark of
                                any third party;</li>
                            <li><span><i class="fa-solid fa-circle-check"></i></span>The Comments do not contain any
                                defamatory, libelous, offensive, indecent or otherwise unlawful material which is an
                                invasion of privacy</li>
                            <li><span><i class="fa-solid fa-circle-check"></i></span>The Comments will not be used to
                                solicit or promote business or custom or present commercial activities or unlawful activity.
                            </li>
                        </ul>
                        <p class="mb-0" data-aos="fade-down">You hereby grant Rush 2 Homes a non-exclusive license to use,
                            reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and
                            all forms, formats or media.</p>

                        <h4>Hyperlinking to our Content</h4>
                        <p class="mb-0" data-aos="fade-down">The following organizations may link to our Website without
                            prior written approval:</p>
                        <ul data-aos="fade-down">
                            <li><span><i class="fa-solid fa-circle-check"></i></span>Government agencies;
                            </li>
                            <li><span><i class="fa-solid fa-circle-check"></i></span>Search engines;</li>
                            <li><span><i class="fa-solid fa-circle-check"></i></span>News organizations;</li>
                            <li><span><i class="fa-solid fa-circle-check"></i></span>Online directory distributors may link
                                to our Website in the same manner as they hyperlink to the Websites of other listed
                                businesses; and
                            </li>
                            <li><span><i class="fa-solid fa-circle-check"></i></span>System wide Accredited Businesses
                                except soliciting non-profit organizations, charity shopping malls, and charity fundraising
                                groups which may not hyperlink to our Web site.</li>
                        </ul>
                        <p class="mb-0" data-aos="fade-down">These organizations may link to our home page, to
                            publications or to other Website information so long as the link: (a) is not in any way
                            deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party
                            and its products and/or services; and (c) fits within the context of the linking party's site.
                        </p>
                        <p class="mb-0" data-aos="fade-down">We may consider and approve other link requests from the
                            following types of organizations:
                        </p>
                        <ul data-aos="fade-down">
                            <li><span><i class="fa-solid fa-circle-check"></i></span>Government agencies;
                            </li>
                            <li><span><i class="fa-solid fa-circle-check"></i></span>commonly-known consumer and/or business
                                information sources;</li>
                            <li><span><i class="fa-solid fa-circle-check"></i></span>dot.com community sites;</li>
                            <li><span><i class="fa-solid fa-circle-check"></i></span>associations or other groups
                                representing charities;</li>
                            <li><span><i class="fa-solid fa-circle-check"></i></span>online directory distributors;</li>
                            <li><span><i class="fa-solid fa-circle-check"></i></span>internet portals;</li>
                            <li><span><i class="fa-solid fa-circle-check"></i></span>accounting, law and consulting firms;
                                and</li>
                            <li><span><i class="fa-solid fa-circle-check"></i></span>educational institutions and trade
                                associations.</li>
                        </ul>
                        <p class="mb-0" data-aos="fade-down">We will approve link requests from these organizations if we
                            decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited
                            businesses; (b) the organization does not have any negative records with us; (c) the benefit to
                            us from the visibility of the hyperlink compensates the absence of Rush 2 Homes; and (d) the
                            link is in the context of general resource information.
                        </p>
                        <p class="mb-0" data-aos="fade-down">These organizations may link to our home page so long as the
                            link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or
                            approval of the linking party and its products or services; and (c) fits within the context of
                            the linking party's site.
                        </p>
                        <p class="mb-0" data-aos="fade-down">If you are one of the organizations listed in paragraph 2
                            above and are interested in linking to our website, you must inform us by sending an e-mail to
                            Rush 2 Homes. Please include your name, your organization name, contact information as well as
                            the URL of your site, a list of any URLs from which you intend to link to our Website, and a
                            list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.
                        </p>
                        <p class="mb-0" data-aos="fade-down">Approved organizations may hyperlink to our Website as
                            follows:
                        </p>
                        <ul data-aos="fade-down">
                            <li><span><i class="fa-solid fa-circle-check"></i></span>By use of our corporate name; or
                            </li>
                            <li><span><i class="fa-solid fa-circle-check"></i></span>By use of the uniform resource locator
                                being linked to; or</li>
                            <li><span><i class="fa-solid fa-circle-check"></i></span>By use of any other description of our
                                Website being linked to that makes sense within the context and format of content on the
                                linking party's site.</li>
                        </ul>
                        <p class="mb-0" data-aos="fade-down">No use of Rush 2 Homes's logo or other artwork will be
                            allowed for linking absent a trademark license agreement.
                        </p>

                        <h4>iFrames</h4>
                        <p class="mb-0" data-aos="fade-down">Without prior approval and written permission, you may not
                            create frames around our Webpages that alter in any way the visual presentation or appearance of
                            our Website.
                        </p>
                        <h4>Content Liability</h4>
                        <p class="mb-0" data-aos="fade-down">We shall not be hold responsible for any content that appears
                            on your Website. You agree to protect and defend us against all claims that is rising on your
                            Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or
                            criminal, or which infringes, otherwise violates, or advocates the infringement or other
                            violation of, any third party rights.
                        </p>
                        <h4>Reservation of Rights</h4>
                        <p class="mb-0" data-aos="fade-down">We reserve the right to request that you remove all links or
                            any particular link to our Website. You approve to immediately remove all links to our Website
                            upon request. We also reserve the right to amen these terms and conditions and it's linking
                            policy at any time. By continuously linking to our Website, you agree to be bound to and follow
                            these linking terms and conditions.
                        </p>
                        <h4>Removal of links from our website</h4>
                        <p class="mb-0" data-aos="fade-down">If you find any link on our Website that is offensive for any
                            reason, you are free to contact and inform us any moment. We will consider requests to remove
                            links but we are not obligated to or so or to respond to you directly.
                        </p>
                        <p class="mb-0" data-aos="fade-down">We do not ensure that the information on this website is
                            correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the
                            website remains available or that the material on the website is kept up to date.
                        </p>
                        <h4>Disclaimer</h4>
                        <p class="mb-0" data-aos="fade-down">To the maximum extent permitted by applicable law, we exclude
                            all representations, warranties and conditions relating to our website and the use of this
                            website. Nothing in this disclaimer will:
                        </p>
                        <ul data-aos="fade-down">
                            <li><span><i class="fa-solid fa-circle-check"></i></span>limit or exclude our or your liability
                                for death or personal injury;</li>
                            <li><span><i class="fa-solid fa-circle-check"></i></span>limit or exclude our or your liability
                                for fraud or fraudulent misrepresentation;</li>
                            <li><span><i class="fa-solid fa-circle-check"></i></span>limit any of our or your liabilities in
                                any way that is not permitted under applicable law; or</li>
                            <li><span><i class="fa-solid fa-circle-check"></i></span>exclude any of our or your liabilities
                                that may not be excluded under applicable law.</li>
                        </ul>
                        <p class="mb-0" data-aos="fade-down">The limitations and prohibitions of liability set in this
                            Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b)
                            govern all liabilities arising under the disclaimer, including liabilities arising in contract,
                            in tort and for breach of statutory duty.</p>
                        <p class="mb-0" data-aos="fade-down">As long as the website and the information and services on
                            the website are provided free of charge, we will not be liable for any loss or damage of any
                            nature.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
