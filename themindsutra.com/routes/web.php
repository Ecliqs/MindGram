<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

use App\Models\Event;

Route::middleware(['cors', 'visitor'])->group(function(){
    Route::get('/', function () {
        $events = Event::all();
        return view('welcome', ['events' => $events]);
    });

    // Alchemist
    Route::get('/alchemist/ahimsa', [WebController::class, 'ahimsa'])->name('ahimsa');
    Route::get('/alchemist/aparigraha', [WebController::class, 'aparigraha'])->name('aparigraha');
    Route::get('/alchemist/asteya', [WebController::class, 'asteya'])->name('asteya');
    Route::get('/alchemist/brahmacharya', [WebController::class, 'brahmacharya'])->name('brahmacharya');
    Route::get('/alchemist/ishwar-pranidhan', [WebController::class, 'ishwarPranidhan'])->name('ishwarPranidhan');
    Route::get('/alchemist/santosh', [WebController::class, 'santosh'])->name('santosh');
    Route::get('/alchemist/satya', [WebController::class, 'satya'])->name('satya');
    Route::get('/alchemist/shauch', [WebController::class, 'shauch'])->name('shauch');
    Route::get('/alchemist/swadhyay', [WebController::class, 'swadhyay'])->name('swadhyay');
    Route::get('/alchemist/tapas', [WebController::class, 'tapas'])->name('tapas');

    // Assessments
    Route::get('/web/all-assessments', [WebController::class, 'allAssessments'])->name('allAssessments');
    Route::get('/assessments/assertiveness-assessment', [WebController::class, 'assertivenessAssessment'])->name('assertivenessAssessment');
    Route::post('/assertiveness-assessment-result', [WebController::class, 'assertivenessAssessmentResult'])->name('assertivenessAssessmentResult');
    Route::get('/assessments/clarity-assessment', [WebController::class, 'clarityAssessment'])->name('clarityAssessment');
    Route::post('/clarity-assessment-result', [WebController::class, 'clarityAssessmentResult'])->name('clarityAssessmentResult');
    Route::get('/assessments/internet-addiction-assessment', [WebController::class, 'internetAddictionAssessment'])->name('internetAddictionAssessment');
    Route::post('/internet-addiction-test-result', [WebController::class, 'internetAddictionAssessmentResult'])->name('internetAddictionAssessmentResult');
    Route::get('/assessments/creativity-assessment', [WebController::class, 'creativityAssessment'])->name('creativityAssessment');
    Route::get('/assessments/forgiveness-assessment', [WebController::class, 'forgivenessAssessment'])->name('forgivenessAssessment');
    Route::post('/forgiveness-assessment-result', [WebController::class, 'forgivenessAssessmentResult'])->name('forgivenessAssessmentResult');
    Route::get('/assessments/authenticity-assessment', [WebController::class, 'authenticityAssessment'])->name('authenticityAssessment');
    Route::post('/authenticity-assessment-result', [WebController::class, 'authenticityAssessmentResult'])->name('authenticityAssessmentResult');
    Route::get('/assessments/happiness-assessment', [WebController::class, 'happinessAssessment'])->name('happinessAssessment');
    Route::get('/assessments/grit-assessment', [WebController::class, 'gritAssessment'])->name('gritAssessment');
    Route::post('/grit-assessment-result', [WebController::class, 'gritAssessmentResult'])->name('gritAssessmentResult');
    Route::get('/assessments/self-care-assessment', [WebController::class, 'selfCareAssessment'])->name('selfCareAssessment');

    // Mind Exercises
    Route::get('/mind-exercise/flexibility-skills', [WebController::class, 'flexibilitySkills'])->name('flexibilitySkills');
    Route::get('/mind-exercise/skills-for-clarity', [WebController::class, 'skillsForClarity'])->name('skillsForClarity');
    Route::get('/mind-exercise/skills-for-originality', [WebController::class, 'skillsForOriginality'])->name('skillsForOriginality');
    Route::get('/mind-exercise/skills-for-creativity', [WebController::class, 'skillsForCreativity'])->name('skillsForCreativity');
    Route::get('/mind-exercise/skills-for-letting-go', [WebController::class, 'skillsForLettingGo'])->name('skillsForLettingGo');
    Route::get('/mind-exercise/skills-for-authenticity', [WebController::class, 'skillsForAuthenticity'])->name('skillsForAuthenticity');
    Route::get('/mind-exercise/skills-for-mindfulness', [WebController::class, 'skillsForMindfulness'])->name('skillsForMindfulness');
    Route::get('/mind-exercise/skills-for-discipline', [WebController::class, 'skillsForDiscipline'])->name('skillsForDiscipline');
    Route::get('/mind-exercise/skills-for-self-improvement', [WebController::class, 'skillsForSelfImprovment'])->name('skillsForSelfImprovment');
    Route::get('/mind-exercise/skills-for-miraculous-thinking', [WebController::class, 'skillsForMiraculousThinking'])->name('skillsForMiraculousThinking');

    Route::get('/art-therapy-exercises', [WebController::class, 'artTherapyExercises'])->name('artTherapyExercises');

    // Journaling Exercises
    Route::get('/journaling-exercise/therapeutic-journaling', [WebController::class, 'therapeuticJournaling'])->name('therapeuticJournaling');
    Route::get('/journaling-exercise/setting-your-healing-intentions', [WebController::class, 'settingYourHealingIntentions'])->name('settingYourHealingIntentions');
    Route::get('/journaling-exercise/creating-a-foundation-for-change', [WebController::class, 'creatingFoundationForChange'])->name('creatingFoundationForChange');

    // BodyWork
    Route::get('/bodywork/breathwork', [WebController::class, 'breathwork'])->name('breathwork');
    Route::get('/bodywork/nutrition', [WebController::class, 'nutrition'])->name('nutrition');
    Route::get('/bodywork/integral-somatic-therapy', [WebController::class, 'integralSomaticTherapy'])->name('integralSomaticTherapy');

    // Energywork
    Route::get('/energywork/mindsutra-meditation', [WebController::class, 'meditation'])->name('meditation');
    Route::get('/energywork/mindsutra-music', [WebController::class, 'music'])->name('music');
    Route::get('/energywork/mindsutra-art', [WebController::class, 'art'])->name('art');

    Route::get('/blogs', [WebController::class, 'blogs'])->name('blogs');

    // Blogs
    Route::get('/blog/abcd-of-assertiveness-a-coping-mantra', [WebController::class, 'blog1'])->name('blog1');
    Route::get('/blog/how-non-violence-transformed-gandhi-into-mahatma', [WebController::class, 'blog2'])->name('blog2');
    Route::get('/blog/a-confident-yes-and-firm-no-the-alchemists-of-life', [WebController::class, 'blog3'])->name('blog3');
    Route::get('/blog/the-foundation-stone-of-parent-child-relationship', [WebController::class, 'blog4'])->name('blog4');
    Route::get('/blog/aura-of-ahimsa', [WebController::class, 'blog5'])->name('blog5');
    Route::get('/blog/compromise-to-clarity', [WebController::class, 'blog6'])->name('blog6');
    Route::get('/blog/dangerous-knowledge', [WebController::class, 'blog7'])->name('blog7');
    Route::get('/blog/jugaad-or-bigaad-musings-on-ethical-fading-in-society', [WebController::class, 'blog8'])->name('blog8');
    Route::get('/blog/a-question-that-can-save-a-life', [WebController::class, 'blog9'])->name('blog9');
    Route::get('/blog/embrace-the-possible', [WebController::class, 'blog10'])->name('blog10');
    Route::get('/blog/difference-between-passion-and-indulgence', [WebController::class, 'blog11'])->name('blog11');
    Route::get('/blog/non-stealing-of-ideas', [WebController::class, 'blog12'])->name('blog12');
    Route::get('/blog/non-stealing-of-our-dreams', [WebController::class, 'blog13'])->name('blog13');
    Route::get('/blog/non-stealing-of-space', [WebController::class, 'blog14'])->name('blog14');
    Route::get('/blog/sync-with-the-universe', [WebController::class, 'blog15'])->name('blog15');
    Route::get('/blog/creativity', [WebController::class, 'blog16'])->name('blog16');
    Route::get('/blog/paradox-of-rising-expectations', [WebController::class, 'blog17'])->name('blog17');
    Route::get('/blog/materialistic-things-and-inner-light', [WebController::class, 'blog18'])->name('blog18');
    Route::get('/blog/take-care-of-life', [WebController::class, 'blog19'])->name('blog19');
    Route::get('/blog/aparigraha-non-possessiveness-of-our-comfort-zone', [WebController::class, 'blog20'])->name('blog20');
    Route::get('/blog/meditate-to-connect-to-your-true-self', [WebController::class, 'blog21'])->name('blog21');
    Route::get('/blog/presence-of-mind', [WebController::class, 'blog22'])->name('blog22');
    Route::get('/blog/purity-in-diet', [WebController::class, 'blog23'])->name('blog23');
    Route::get('/blog/as-a-man-thinketh', [WebController::class, 'blog24'])->name('blog24');
    Route::get('/blog/achieve-the-unthinkable', [WebController::class, 'blog25'])->name('blog25');
    Route::get('/blog/cultivate-the-flowers-and-fruits-of-right', [WebController::class, 'blog26'])->name('blog26');
    Route::get('/blog/a-pure-hearted-friend', [WebController::class, 'blog27'])->name('blog27');
    Route::get('/blog/a-super-force-beyond-our-wildest-dreams', [WebController::class, 'blog28'])->name('blog28');
    Route::get('/blog/coffee-with-creativity', [WebController::class, 'blog29'])->name('blog29');
    Route::get('/blog/the-complete-picture', [WebController::class, 'blog30'])->name('blog30');
    Route::get('/blog/move-towards-the-goal', [WebController::class, 'blog31'])->name('blog31');
    Route::get('/blog/when-likes-are-not-enough', [WebController::class, 'blog32'])->name('blog32');
    Route::get('/blog/is-tapas-a-path-to-inner-peace', [WebController::class, 'blog33'])->name('blog33');
    Route::get('/blog/arunima-sinha-story', [WebController::class, 'blog34'])->name('blog34');
    Route::get('/blog/the-word-tapas-means-fire', [WebController::class, 'blog35'])->name('blog35');
    Route::get('/blog/repetition-of-positive-motivating-behaviour', [WebController::class, 'blog36'])->name('blog36');
    Route::get('/blog/need-of-self-introspection', [WebController::class, 'blog37'])->name('blog37');
    Route::get('/blog/surrender-to-the-divine-completely', [WebController::class, 'blog38'])->name('blog38');
    Route::get('/blog/speak-to-your-inner-voice', [WebController::class, 'blog39'])->name('blog39');
    Route::get('/blog/surrendering-completely-to-the-universe', [WebController::class, 'blog40'])->name('blog40');
    Route::get('/blog/trust-in-our-god', [WebController::class, 'blog41'])->name('blog41');
    Route::get('/blog/listen-to-you-inner-voice', [WebController::class, 'blog42'])->name('blog42');

    // Social Media
    Route::get('/social-media/workshop-reviews', [WebController::class, 'workshopReviews'])->name('workshopReviews');
    Route::get('/social-media/gallery', [WebController::class, 'gallery'])->name('gallery');
    Route::get('/social-media/youtube', [WebController::class, 'youtube'])->name('youtube');
    Route::get('/social-media/book-reviews', [WebController::class, 'bookReviews'])->name('bookReviews');

    // Know Us
    Route::get('/know-us/mindsutra', [WebController::class, 'mindsutra'])->name('mindsutra');
    Route::get('/know-us/know-the-authors', [WebController::class, 'knowTheAuthors'])->name('knowTheAuthors');
    Route::get('/know-us/know-our-speakers', [WebController::class, 'knowTheSpeakers'])->name('knowTheSpeakers');
    Route::get('/know-us/know-our-support-team', [WebController::class, 'knowSupportTeam'])->name('knowSupportTeam');
    Route::get('/know-us/contact-us', [WebController::class, 'contactUs'])->name('contactUs');
    Route::post('/send-message', [WebController::class, 'sendMessage'])->name('sendMessage');
    Route::get('/all-events', [WebController::class, 'allEvents'])->name('allEvents');
    Route::post('/event-registration', [WebController::class, 'eventRegistration'])->name('eventRegistration');
    Route::get('/all-workshops', [WebController::class, 'allWorkshops'])->name('allWorkshops');

    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
        Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    });
});
