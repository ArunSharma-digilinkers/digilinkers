<div class="col-lg-4 col-md-12 col-sm-12 mb-4">
                    <div class="form-wrapper">
                        <div class="quote-form-container">
                            <h2>Request A Quote</h2>
                            <p>
                                Please complete our request information form and our consulting representative shall
                                get in touch with you shortly.
                            </p>
                          
                            <div id="formErrors" class="text-danger mb-3 eror"></div>
                            <div id="formSuccess" class="text-success mb-3"></div>

                            <form class="quote-form" id="quoteForm" action="{{ route('quote.send') }}" method="POST">
                                @csrf
                                <input type="hidden" name="source_page" value="{{ url()->current() }}">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Full Name*" >
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="phone" placeholder="Phone Number*">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email Address*">
                                </div>
                                <div class="form-group">
                                    <textarea name="requirement" rows="4" placeholder="Your Requirement/Query*"></textarea>
                                </div>
                                <button type="submit" class="submit-btn">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>