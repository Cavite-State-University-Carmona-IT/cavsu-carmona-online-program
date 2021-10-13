<x-app-layout-admin>
    @include('scripts.report-index')

    <div class="flex w-full px-40 ">
        <div class="w-1/3">
            <div class="w-full px-9 pt-9">
                <div class="text-gray-500 font-bold text-lg mb-2">Generate Reports</div>
                <div class="text-gray-400 text-xs">Download report in Excel Format</div>
            </div>
            <hr class=" m-6">
            <div class="flex pl-10">
                <div class="grid grid-rows-3 bg-gray-200 h-full w-1">
                    <div id="lineRegisteredUser" class="w-1 h-9 my-5 bg-green-300">

                    </div>
                    <div id="lineActiveInactiveUser" class="w-1 h-9  my-5">

                    </div>
                    <div id="lineCompletedEvaluation" class="w-1 h-9  my-5">

                    </div>
                </div>
                <div class="grid grid-rows-3 w-60 text-gray-400 font-light">
                    <button id="buttonRegisteredUser" class="h-10 my-4 mx-7 text-left text-gray-500 font-bold">
                        Registered User
                    </button>
                    <button id="buttonActiveInactiveUser" class="h-10 my-4 mx-7 text-left">
                        Active & Inactive User
                    </button>
                    <button id="buttonCompletedEvaluation" class="h-10 my-4 mx-7 text-left">
                        Completed Evaluation
                    </button>
                </div>
            </div>
        </div>
        <div class="w-2/3 p-5">
            <div class="h-full bg-white w-full shadow-sm rounded-xl p-10 px-14">

                {{-- Registered User --}}
                <div id="divRegisteredUser" class="w-full h-full">
                    <div class="text-gray-500 text-left font-bold">Registered User</div>
                    <hr class="my-4">
                    <div class="text-gray-600">

                        {{-- start date and end date --}}
                        <div class="flex mb-4">
                            <div class="w-1/2 mx-3">
                                <label for="registeredUserStartDate" class="block text-sm font-medium">Start Date</label>
                                <input type="date" id="registeredUserStartDate" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm"/>
                            </div>
                            <div class="w-1/2 mx-3">
                                <label for="registeredUserEndDate" class="block text-sm font-medium">End Date</label>
                                <input type="date" id="registeredUserEndDate" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm"/>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <div class="mx-3 w-full">
                                <label for="registeredUserDate" class="block text-sm font-medium">Date</label>
                                <input type="date" id="registeredUserDate" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm"/>
                            </div>
                        </div>
                        <div class="flex place-items-center mb-4 mx-3">
                            <div class="flex items-center h-5">
                                <input id="registeredUserCheckboxSpecificDate" name="registeredUserCheckboxSpecificDate" type="checkbox"
                                    class="focus:ring-1 focus:ring-gray-200 h-4 w-4 text-green-500 border-gray-300 rounded ring-0">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="registeredUserCheckboxSpecificDate" class="font-regular text-gray-700">Specific Date</label>

                            </div>
                        </div>
                    </div>
                </div>
                {{-- active inactive user --}}
                <div id="divActiveInactiveUser" hidden class="w-full h-full">
                    <div class="text-gray-500 text-left font-bold">Active & Inactive User</div>
                    <hr class="my-4">
                    <div class="text-gray-600">

                        {{-- start date and end date --}}
                        <div class="flex mb-4">
                            <div class="w-1/2 mx-3">
                                <label for="registeredUserStartDate" class="block text-sm font-medium">Start Date</label>
                                <input type="date" id="registeredUserStartDate" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm"/>
                            </div>
                            <div class="w-1/2 mx-3">
                                <label for="registeredUserEndDate" class="block text-sm font-medium">End Date</label>
                                <input type="date" id="registeredUserEndDate" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm"/>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <div class="mx-3 w-full">
                                <label for="registeredUserDate" class="block text-sm font-medium">Date</label>
                                <input type="date" id="registeredUserDate" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm"/>
                            </div>
                        </div>
                        <div class="flex place-items-center mb-4 mx-3">
                            <div class="flex items-center h-5">
                                <input id="registeredUserCheckboxSpecificDate" name="registeredUserCheckboxSpecificDate" type="checkbox"
                                    class="focus:ring-1 focus:ring-gray-200 h-4 w-4 text-green-500 border-gray-300 rounded ring-0">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="registeredUserCheckboxSpecificDate" class="font-regular text-gray-700">Specific Date</label>

                            </div>
                        </div>
                    </div>
                </div>
                {{-- completed evaluation --}}
                <div id="divCompletedEvaluation" hidden class="w-full h-full">
                    <div class="text-gray-500 text-left font-bold">Completed Evaluation</div>
                    <hr class="my-4">
                    <div class="text-gray-600">

                        {{-- start date and end date --}}
                        <div id="divCEBetweenDates" class="flex mb-3">
                            <div class="w-1/2 mx-3">
                                <label for="completedEvaluationStartDate" class="block text-sm font-medium">Start Date</label>
                                <input type="date" id="completedEvaluationStartDate" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm"/>
                            </div>
                            <div class="w-1/2 mx-3">
                                <label for="completedEvaluationEndDate" class="block text-sm font-medium">End Date</label>
                                <input type="date" id="completedEvaluationEndDate" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm"/>
                            </div>
                        </div>
                        {{-- date --}}
                        <div id="divCESpecificDate" class="flex mb-3" style="display: none;">
                            <div class="mx-3 w-full">
                                <label for="completedEvaluationDate" class="block text-sm font-medium">Date</label>
                                <input type="date" id="completedEvaluationDate" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm"/>
                            </div>
                        </div>
                        {{-- checkbox specific date --}}
                        <div class="flex place-items-center mb-4 mx-3">
                            <div class="flex items-center h-5">
                                <input id="completedEvaluationCheckboxSpecificDate" type="checkbox" class="focus:ring-1 focus:ring-gray-200 h-4 w-4 text-green-500 border-gray-300 rounded ring-0">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="completedEvaluationCheckboxSpecificDate" class="font-regular text-gray-700">Specific Date</label>
                            </div>
                        </div>
                        {{-- extension service --}}
                        <div class="flex mb-4">
                            <div class="mx-3 w-full">
                                <label for="completedEvaluationExtensionService" class="block text-sm font-medium">Extension Service</label>
                                <select id="completedEvaluationExtensionService" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm">

                                </select>
                            </div>
                        </div>
                        {{-- course --}}
                        <div class="flex mb-8">
                            <div class="mx-3 w-full">
                                <label for="completedEvaluationWebinar" class="block text-sm font-medium">Webinar</label>
                                <select id="completedEvaluationWebinar" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm">
                                    <option>All</option>

                                </select>
                            </div>
                        </div>
                        {{-- download button --}}
                        <div class="flex">
                            <div class="mx-3 w-full flow-root">
                                <button onclick="download_report_completed_evaluation();" class="float-right px-4 py-2 rounded-md text-sm font-medium border-0 focus:outline-none focus:ring transition text-white bg-gray-500 hover:bg-gray-600 active:bg-gray-700 focus:ring-gray-300">Download</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="grid-cols-2">
        <div class="grid-rows-3">
            <button id="buttonRegisteredUser" class="w-full rounded-tl-lg rounded-bl-lg shadow-md bg-white text-sm font-bold uppercase text-gray-500 m-4 py-4 px-6 block hover:text-green-400 focus:outline-none border-r-4 border-green-400">
                Registered User
            </button>
            <button id="buttonActiveInactiveUser" class="w-full rounded-tl-lg rounded-bl-lg shadow-md bg-white text-sm font-bold uppercase text-gray-400 m-4 py-4 px-6 block hover:text-green-400 focus:outline-none">
                Active and Inactive User
            </button>
            <button id="buttonCompletedEvaluation" class="w-full rounded-tl-lg rounded-bl-lg shadow-md bg-white text-sm font-bold uppercase text-gray-400 m-4 py-4 px-6 block hover:text-green-400 focus:outline-none">
                Completed Evaluation
            </button>
        </div>
    </div> --}}
    <!--
    <div class="grid-rows-2">
        <div class="bg-white">
            <nav class="flex flex-col sm:flex-row">
                <button id="buttonRegisteredUser" class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none border-b-2 font-medium border-blue-500">
                    List of Registered User
                </button>
                <button id="buttonActiveInactiveUser" class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
                    Active and Inactive User
                </button>
                <button id="buttonCompletedEvaluation" class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
                    Completed Evaluation
                </button>
            </nav>
        </div>
        <div class="w-full bg-white border-1 border-gray-200 p-6 rounded-md rounded-t-none tracking-wide shadow-lg">

            {{-- registered user --}}
            <div id="divRegisteredUser">
                <div class="p-4">
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                            Date
                        </label>
                        <input
                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            id="email"
                            type="date"
                        />
                    </div>
                    <button onclick="download_active_inactive_user()" class="p-2 pl-5 pr-5 bg-transparent border-2 border-blue-500 text-blue-500 text-lg rounded-lg hover:bg-blue-500 hover:text-gray-100 focus:border-4 focus:border-blue-300">Download</button>

                </div>
            </div>

            {{-- active inactive user --}}
            <div id="divActiveInactiveUser" hidden>
                <div id="header" class="flex items-center mb-4">
                <img alt="avatar" class="w-20 rounded-full border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />
                <div id="header-text" class="leading-5 ml-6 sm">
                    <h4 id="name" class="text-xl font-semibold">Carl</h4>
                    <h5 id="job" class="font-semibold text-blue-600">canada</h5>
                </div>
                </div>
                <div id="quote">
                <q class="italic text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</q>
                </div>
                <button onclick="download_active_inactive_user();" class="p-2 pl-5 pr-5 bg-transparent border-2 border-blue-500 text-blue-500 text-lg rounded-lg hover:bg-blue-500 hover:text-gray-100 focus:border-4 focus:border-blue-300">Download</button>

            </div>

            {{-- completed evaluation --}}
            <div id="divCompletedEvaluation" hidden>
                <div id="header" class="flex items-center mb-4">
                <img alt="avatar" class="w-20 rounded-full border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />
                <div id="header-text" class="leading-5 ml-6 sm">
                    <h4 id="name" class="text-xl font-semibold">Van</h4>
                    <h5 id="job" class="font-semibold text-blue-600">Vogh</h5>
                </div>
                </div>
                <div id="quote">
                <q class="italic text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</q>
                </div>
            </div>
        </div>
    </div> -->

</x-app-layout-admin>

