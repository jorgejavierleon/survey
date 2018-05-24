@extends('layouts.app')

@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-6 col-xs-12 mb-1">
        <h2 class="content-header-title">Survey example</h2>
    </div>
</div>
<div class="content-body">
    <div id="surveyContainer">
        <survey :survey="survey"></survey>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
<script src="https://surveyjs.azureedge.net/1.0.23/survey.vue.min.js"></script>
<script>
    var surveyJSON = { 
        title: "Que tecnologias usas?", 
        pages: [
            { 
                name:"page1", 
                questions: [ 
                    { type: "radiogroup", choices: [ "Yes", "No" ], isRequired: true, name: "frameworkUsing",title: "Do you use any front-end framework like Bootstrap?" },
                    { type: "checkbox", choices: ["Bootstrap","Foundation"], hasOther: true, isRequired: true, name: "framework", title: "What front-end framework do you use?", visibleIf: "{frameworkUsing} = 'Yes'" }
                ]
            },
            { 
                name: "page2", 
                questions: [
                    { type: "radiogroup", choices: ["Yes","No"],isRequired: true, name: "mvvmUsing", title: "Do you use any MVVM framework?" },
                    { type: "checkbox", choices: [ "AngularJS", "KnockoutJS", "React" ], hasOther: true, isRequired: true, name: "mvvm", title: "What MVVM framework do you use?", visibleIf: "{mvvmUsing} = 'Yes'" } 
                ] 
            },
            { 
                name: "page3",
                questions: [
                    { type: "comment", name: "about", title: "Please tell us about your main requirements for Survey library" } 
                ] 
            }
        ]
    };
    Survey.Survey.cssType = "bootstrap";
    var survey = new Survey.Model(surveyJSON);
    survey.onComplete.add(function (sender, options) {
        console.log({'sender': sender, 'options':options});
        var resultAsString = JSON.stringify(survey.data);
        alert(resultAsString); //send Ajax request to your web server.
    });
    survey.locale = 'es';
    new Vue({ el: '#surveyContainer', data: { survey: survey } });
    function sendDataToServer(survey) {
        var resultAsString = JSON.stringify(survey.data);
        alert(resultAsString); //send Ajax request to your web server.
    }
</script>
@endsection
