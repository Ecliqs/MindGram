<x-web-layout>

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Therapeutic journaling</h1>
                    <ul class="breadcrumb breadcrumb--classic">
                        <li><a href="/"><i class="fa fa-home"></i></a></li>
                            <li class="active"><a>Therapeutic journaling</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="details mb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>An Introduction to Expressive Writing</h2>
                    <p>There is something to be said for the cathartic effects of putting what bothers us into words– but that is an idea we’re already familiar with. In the 1980s, Dr. James Pennebaker, a Social Psychologist and professor at the University of Texas at Austen found high corelation between experiencing traumatic/stressful life events and poor physical and psychological health outcomes, which isn’t surprising, but the corelation was much, much higher if the trauma/stressful event had been kept secret and not talked about. This lead him down a veritable rabbit-hole of possibilities, which is how scores of college students found their way into little cubicles near his office not long after a wee he came to that conclusion, writing their most vulnerable thoughts and emotions down on paper for 15 minutes for 4 consecutive days. Most reported that participating in the study had been a profoundly important experience for them.</p>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <p>This practise is called expressive writing or therapeutic journaling. Therapeutic journaling is a process where you write about your thoughts and feelings regarding traumatic, stressful or emotionally charged moments like loss of loved ones, break-ups, sexual violence, conflicts etc that you’ve experienced. This writing is different from regular journaling in that it is very specifically emotion-focused and it calls for subjective and freestyle expression of anything under the sun that you think and feel about your emotionally-charged incident. The idea is not just to express, however, although that is the first step. The curative effects of the writing stem from the process of meaning-making that is seen in the form of giving concrete shape to anxieties and fears that could otherwise be scarily formless and all-pervasive, which eventually leads to cognitive growth. It helps to move focus from the fear centres of the brain to the rational centres of the brain, which makes psychological concerns easier to address. There’s a science fiction short story called “Flowers for Algernon” by Daniel Keyes that I was reminded of – the story is in the form of a daily journal that charts growth in cognition and intelligence that is an engaging read purely for recreational purposes.</p>
                        </div>
                        <div class="col-md-6 mb-3 px-5">
                            <img src="{{ asset('images/web/journaling/first.png') }}" alt="" width="100%" height="100%">
                        </div>
                    </div>
                    <p>Lets get back to the first Pennebaker study - The results of the study in the 1980s were a revelation of sorts, which psychologists proceeded to consistently duplicate in at least 300 related studies from that point onwards. The results of the many, many studies conducted on this process consistently found these writing exercises associated with a whole host of positive health outcomes like higher immune functioning and lowered levels of cortisol (which is the stress hormone). Psychologically, one of the most exciting discoveries came about as a result of a 2012 study on the effectiveness of expressive writing on post-traumatic stress conditions, which found expressive writing about as useful as cognitive-behaviour therapy in alleviating symptoms. This means that expressive writing is an option one could consider under certain circumstances if one doesn’t have access to professional psychological/psychiatric help. Kathleen Adams of the Centre for Journal Therapy in Colorado goes as far as to say that therapy isn’t necessary to benefit from therapeutic writing. She calls it the 79-cent therapy for how economical it is.</p>
                    <p>Therapeutic journaling has come a long way since the 1980s, with a plethora of variations – the writing exercise can range anywhere from 3-4 days to six weeks, depending on which paradigm suits your needs best or what your therapist recommends. You could write an entry and promptly destroy it (which has been corelated with the highest amounts of disclosure and therefore with better outcomes), or you could preserve it to be able to trace and look back on cognitive growth, or if you are doing expressive writing as part of your therapy, then your writing is meant for your therapist to analyse. There are a few important things to remember if you decide to take up therapeutic journaling:</p>
                    <ol>
                        <li>Do not write about traumatic life events within only a few weeks of the event happening. The trauma is still likely too raw to be independently processed or to allow for cognitive growth to take place.</li>
                        <li>The flip-out rule is of prime importance. Do not write about events if you don’t feel ready.</li>
                        <li>A sense of heaviness or sadness is common after doing the writing exercise, but this generally goes away in a few hours to give way to more desirable long-term benefits.</li>
                        <li>Go with where your writing leads you. You might start off talking about something and switch tracks to something else along the way, and that is alright.</li>
                        <li>Don’t be concerned about spelling, sentence-structure, punctuation etc in the least. The process of authentic self-expression and growth is what is important.</li>
                    </ol>
                    <br/>
                    <h2>References</h2>
                    <ol>
                        <li>
                            <p>For a concise introduction to expressive writing with information on significant research on the subject and a critical perspective on the same, refer to the article titled “ Writing to Heal” by Bridget Murray on the website of the American Psychological Association:</p>
                            <p><a href="https://www.apa.org/monitor/jun02/writing" target="_blank" rel="noopener noreferrer">https://www.apa.org/monitor/jun02/writing</a></p>
                        </li>
                        <li>
                            <p>For a more exhaustive resource on Expressive Writing from the very people who coined the phrase, theorised and brought it into practise and contributed significantly to research studies for decades after, refer to Dr. James Pennebaker and Dr. Joshua Smyth’s 2014 volume <i>Expressive Writing: Words that Heal</i>, published by Idyll Arbor.</p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Contact Us</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <form class="contact-form" method="post" action="{{ route('sendMessage') }}">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name" oncopy="return false" onpaste="return false" required>
                        </div>
                        <div class="form-group mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" oncopy="return false" onpaste="return false" oninvalid="this.setCustomValidity('Please enter a valid email')" oninput="this.setCustomValidity('')" required>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile Number" minlength="10" maxlength="10" oncopy="return false" onpaste="return false" oninvalid="this.setCustomValidity('Please enter a valid mobile number')" oninput="this.setCustomValidity('')" pattern="[6-9]{1}[0-9]{9}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                        </div>
                        <div class="form-group mb-3">
                            <textarea type="text" class="form-control" id="msg" name="msg" placeholder="Enter Your Message" rows="5" oncopy="return false" onpaste="return false"></textarea>
                        </div>
                        <div class="form-group text-center mb-3">
                            <input type="submit" class="btn btn-send" id="send" name="send" value="Send">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="contact-image">
                        <img src="{{ asset('images/web/contact-image.jpg') }}" alt="" width="100%" height="100%">
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-web-layout>