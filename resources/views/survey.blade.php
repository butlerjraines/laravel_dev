<!-- tailwind.config.js 
module.exports = {
    plugins: [
        require('@tailwindcss/custom-forms'),
    ],
}vbvcb

-->

<x-app-layout>

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         <!--  {{ __('Dashboard') }} --> Hi, {{$user->name}}! </h2>
         {{$results[0]->respondent_alternate_id}}
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
 <!--Container-->
 <div class="container w-full mx-auto pt-20">

<div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">

    <!--Console Content-->

    <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
            <!--Metric Card-->
            <div class="bg-white border rounded shadow p-2">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded p-3 bg-green-600"><i class="fa fa-wallet fa-2x fa-fw fa-inverse"></i></div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold uppercase text-gray-500">% Connective</h5>
                        <h3 class="font-bold text-3xl"> {{$results[0]->percentile_connective}} <span class="text-green-500"><i class="fas fa-caret-up"></i></span></h3>
                    </div>
                </div>
            </div>
            <!--/Metric Card-->
        </div>
        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
            <!--Metric Card-->
            <div class="bg-white border rounded shadow p-2">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded p-3 bg-pink-600"><i class="fas fa-users fa-2x fa-fw fa-inverse"></i></div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold uppercase text-gray-500">% Curative</h5>
                        <h3 class="font-bold text-3xl">{{$results[0]->percentile_curative}} <span class="text-pink-500"><i class="fas fa-exchange-alt"></i></span></h3>
                    </div>
                </div>
            </div>
            <!--/Metric Card-->
        </div>
        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
            <!--Metric Card-->
            <div class="bg-white border rounded shadow p-2">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded p-3 bg-yellow-600"><i class="fas fa-user-plus fa-2x fa-fw fa-inverse"></i></div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold uppercase text-gray-500">% Curious</h5>
                        <h3 class="font-bold text-3xl">{{$results[0]->percentile_curious}} <span class="text-yellow-600"><i class="fas fa-caret-up"></i></span></h3>
                    </div>
                </div>
            </div>
            <!--/Metric Card-->
        </div>
        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
            <!--Metric Card-->
            <div class="bg-white border rounded shadow p-2">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded p-3 bg-blue-600"><i class="fas fa-server fa-2x fa-fw fa-inverse"></i></div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold uppercase text-gray-500">% Experiment</h5>
                        <h3 class="font-bold text-3xl">{{$results[0]->percentile_experiment}}</h3>
                    </div>
                </div>
            </div>
            <!--/Metric Card-->
        </div>
        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
            <!--Metric Card-->
            <div class="bg-white border rounded shadow p-2">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded p-3 bg-indigo-600"><i class="fas fa-tasks fa-2x fa-fw fa-inverse"></i></div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold uppercase text-gray-500">% Expert</h5>
                        <h3 class="font-bold text-3xl">{{$results[0]->percentile_expert}}</h3>
                    </div>
                </div>
            </div>
            <!--/Metric Card-->
        </div>
        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
            <!--Metric Card-->
            <div class="bg-white border rounded shadow p-2">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded p-3 bg-red-600"><i class="fas fa-inbox fa-2x fa-fw fa-inverse"></i></div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold uppercase text-gray-500">% Flexible</h5>
                        <h3 class="font-bold text-3xl">{{$results[0]->percentile_flexible}} <span class="text-red-500"><i class="fas fa-caret-up"></i></span></h3>
                    </div>
                </div>
            </div>
            <!--/Metric Card-->
        </div>
    </div>







    <!--Divider-->
    <hr class="border-b-2 border-gray-400 my-8 mx-4">




    <div class="flex flex-row flex-wrap flex-grow mt-2">

        <div class="w-full md:w-1/2 p-3">
            <!--Graph Card-->
            <div class="bg-white border rounded shadow">
                <div class="border-b p-3">
                    <h5 class="font-bold uppercase text-gray-600">Comparison</h5>
                </div>
                <div class="p-5">
                    <canvas id="chartjs-7" class="chartjs" width="undefined" height="undefined"></canvas>
                    <script>
                    new Chart(document.getElementById("chartjs-7"), {
                        "type": "bar",
                        "data": {
                            "labels": ["Respondent: {{$results[0]->respondent_id}}", "Respondent: {{$results[1]->respondent_id}}", "Respondent: {{$results[2]->respondent_id}}"],
                            "datasets": [{
                                "label": "Curative",
                                "data": [{{$results[0]->percentile_curative}}, {{$results[1]->percentile_curative}}, {{$results[2]->percentile_curative}}],
                                "borderColor": "rgb(255, 99, 132)",
                                "backgroundColor": "rgba(255, 99, 132, 0.2)"
                            }, {
                                "label": "Flexible",
                                "data": [{{$results[0]->percentile_flexible}}, {{$results[1]->percentile_flexible}}, {{$results[2]->percentile_flexible}}],
                                "type": "line",
                                "fill": false,
                                "borderColor": "rgb(54, 162, 235)"
                            }]
                        },
                        "options": {
                            "scales": {
                                "yAxes": [{
                                    "ticks": {
                                        "beginAtZero": true
                                    }
                                }]
                            }
                        }
                    });
                    </script>
                </div>
            </div>
            <!--/Graph Card-->
        </div>





        <div class="w-full md:w-1/2 p-3">
            <!--Graph Card-->
            <div class="bg-white border rounded shadow">
                <div class="border-b p-3">
                    <h5 class="font-bold uppercase text-gray-600">Scores over Time</h5>
                </div>
                <div class="p-5">
                    <canvas id="chartjs-0" class="chartjs" width="undefined" height="undefined"></canvas>
                    <script>
                    new Chart(document.getElementById("chartjs-0"), {
                        "type": "line",
                        "data": {
                            "labels": ["January", "February", "March"],
                            "datasets": [{
                                "label": "Curative",
                                "data": [{{$results[0]->percentile_curative}}, {{$results[1]->percentile_curative}}, {{$results[2]->percentile_curative}}],
                                "fill": false,
                                "borderColor": "rgb(75, 192, 192)",
                                "lineTension": 0.1
                            }]
                        },
                        "options": {}
                    });
                    </script>
                </div>
            </div>
            <!--/Graph Card-->
        </div>

        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
            <!--Graph Card-->
            <div class="bg-white border rounded shadow">
                <div class="border-b p-3">
                    <h5 class="font-bold uppercase text-gray-600">Graph</h5>
                </div>
                <div class="p-5">
                    <canvas id="chartjs-1" class="chartjs" width="undefined" height="undefined"></canvas>
                    <script>
                    var marksData = {
  labels: ["English", "Maths", "Physics", "Chemistry", "Biology", "History"],
  datasets: [{
    label: "Student A",
    backgroundColor: "rgba(200,0,0,0.2)",
    data: [65, 75, 70, 80, 60, 80]
  }, {
    label: "Student B",
    backgroundColor: "rgba(0,0,200,0.2)",
    data: [54, 65, 60, 70, 70, 75]
  }]
};
                    new Chart(document.getElementById("chartjs-1"), {
                      type: 'radar',
    data: marksData,
    //options: chartOptions
                    });
                    </script>
                </div>
            </div>
            <!--/Graph Card-->
        </div>

        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
            <!--Graph Card-->
            <div class="bg-white border rounded shadow">
                <div class="border-b p-3">
                    <h5 class="font-bold uppercase text-gray-600">Graph</h5>
                </div>
                <div class="p-5"><canvas id="chartjs-4" class="chartjs" width="undefined" height="undefined"></canvas>
                    <script>
                    new Chart(document.getElementById("chartjs-4"), {
                        "type": "doughnut",
                        "data": {
                            "labels": ["P1", "P2", "P3"],
                            "datasets": [{
                                "label": "Issues",
                                "data": [300, 50, 100],
                                "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
                            }]
                        }
                    });
                    </script>
                </div>
            </div>
            <!--/Graph Card-->
        </div>

        

        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
            <!--Template Card-->
            <div class="bg-white border rounded shadow">
                <div class="border-b p-3">
                    <h5 class="font-bold uppercase text-gray-600">Template</h5>
                </div>
                <div class="p-5">

                </div>
            </div>
            <!--/Template Card-->
        </div>

        <div class="w-full p-3">
            <!--Table Card-->
            <div class="bg-white border rounded shadow">
                <div class="border-b p-3">
                    <h5 class="font-bold uppercase text-gray-600">Table</h5>
                </div>
                <div class="p-5">
                    <table class="w-full p-5 text-gray-700">
                        <thead>
                            <tr>
                                <th class="text-left text-blue-900">Name</th>
                                <th class="text-left text-blue-900">Side</th>
                                <th class="text-left text-blue-900">Role</th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach($results as $result)
                            <tr>
                                <td>{{$result->score_connective}}</td>
                                <td>{{$result}}</td>
                                <td>{{$result}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <p class="py-2"><a href="#">{{$results[0]->score_connective}}</a></p>

                </div>
            </div>
            <!--/table Card-->
        </div>

        
        <!--Wide Panel -->
        <div class="w-full p-3">
            <!--Table Card-->
            <div class="bg-white border rounded shadow">
                <div class="border-b p-3">
                    <h5 class="font-bold uppercase text-gray-600">Table</h5>
                </div>
                <div class="p-5">
                    <table class="w-full p-5 text-gray-700">
                        <thead>
                            <tr>
                                <th class="text-left text-blue-900">Name</th>
                                <th class="text-left text-blue-900">Side</th>
                                <th class="text-left text-blue-900">Role</th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach($results as $result)
                            <tr>
                                <td>{{$result->score_connective}}</td>
                                <td>{{$result}}</td>
                                <td>{{$result}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <p class="py-2"><a href="#">{{$results[0]->score_connective}}</a></p>

                </div>
            </div>
            <!--/wide Panel-->
        </div>


    </div>

    <!--/ Console Content-->

</div>


</div>

<!--/container--></x-app-layout>