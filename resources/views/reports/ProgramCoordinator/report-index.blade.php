<x-app-layout-admin>
    {{-- @include('scripts.report-index') --}}
    <div class="max-w-full pt-16 mt-2 bg-white h-screen">

        <div  x-data="{ tab: 'registeredUser'}" class="grid grid-cols-3 w-full px-4 md:px-12 lg:px-40 pt-9">
            {{-- left panel --}}
            <div class="col-span-1 hidden md:block py-5 border-r border-gray-200">
                <div class="w-full px-9">
                    <div class="text-gray-500 font-bold text-lg mb-2">Generate Reports</div>
                    <div class="text-gray-400 text-xs">Download report in Excel Format</div>
                </div>
                <hr class=" m-6">
                <div class="pl-10">
                    <div class="grid grid-rows-3 text-left text-sm">
                        <div class="row-span-1 flex">
                            <div class="bg-gray-200 w-1 flex-none py-5">
                                <div class="w-full h-full" :class="tab === 'registeredUser' ? 'bg-green-400' : 'bg-gray-200'">
                                </div>
                            </div>
                            <a id="buttonRegisteredUser" @click="tab = 'registeredUser'" class="outline-none p-6 cursor-pointer" :class="tab === 'registeredUser' ? 'text-gray-800 font-bold' : 'text-gray-500 font-semibold'">
                                Registered User
                            </a>
                        </div>
                        <div class="row-span-1 flex">
                            <div class="bg-gray-200 w-1 flex-none py-5">
                                <div class="w-full h-full" :class="tab === 'activeInactiveUser' ? 'bg-green-400' : 'bg-gray-200'">
                                </div>
                            </div>
                            <a id="buttonActiveInactiveUser" @click="tab = 'activeInactiveUser'" class="outline-none p-6 cursor-pointer" :class="tab === 'activeInactiveUser' ? 'text-gray-800 font-bold' : 'text-gray-500 font-semibold'">
                                Active & Inactive User
                            </a>
                        </div>
                        <div class="row-span-1 flex">
                            <div class="bg-gray-200 w-1 flex-none py-5">
                                <div class="w-full h-full" :class="tab === 'completedEvaluation' ? 'bg-green-400' : 'bg-gray-200'">
                                </div>
                            </div>
                            <a id="buttonCompletedEvaluation" @click="tab = 'completedEvaluation'" class="outline-none p-6 cursor-pointer" :class="tab === 'completedEvaluation' ? 'text-gray-800 font-bold' : 'text-gray-500 font-semibold'">
                                Completed Evaluation
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- right panel --}}
            <div class="md:col-span-2 col-span-3 py-5">
                <div class="h-full bg-white w-full shadow-sm rounded-xl px-14">

                    {{-- Registered User --}}
                    <div x-show="tab === 'registeredUser'" class="w-full h-full">
                        <div class="w-full">
                            <div class="text-gray-500 font-bold text-lg mb-2">Registered User</div>
                            <div class="text-gray-400 text-xs">Users each webinar reports</div>
                        </div>
                        <hr class="my-6">

                        {{-- <div class="text-gray-500 text-left font-bold">Registered User</div> --}}
                        {{-- <hr class="my-4"> --}}
                        <div class="text-gray-600">

                            {{-- start date and end date --}}
                            <div id="registeredUserBetweenDate" class="flex mb-4">
                                <div class="w-1/2 mx-3">
                                    <label for="registeredUserStartDate" class="block text-sm font-medium">Start Date</label>
                                    <input type="date" id="registeredUserStartDate" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm"/>
                                </div>
                                <div class="w-1/2 mx-3">
                                    <label for="registeredUserEndDate" class="block text-sm font-medium">End Date</label>
                                    <input type="date" id="registeredUserEndDate" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm"/>
                                </div>
                            </div>

                            {{-- date --}}
                            <div id="registeredUserSpecificDate" style="display: none" class="flex mb-4">
                                <div class="mx-3 w-full">
                                    <label for="registeredUserDate" class="block text-sm font-medium">Date</label>
                                    <input type="date" id="registeredUserDate" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm"/>
                                </div>
                            </div>
                                {{-- checkbox specific date --}}
                            <div class="flex place-items-center mb-4 mx-3">
                                <div class="flex items-center h-5">
                                    <input id="registeredUserCheckboxSpecificDate" name="registeredUserCheckboxSpecificDate" type="checkbox"
                                        class="focus:ring-1 focus:ring-gray-200 h-4 w-4 text-green-500 border-gray-300 rounded ring-0">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="registeredUserCheckboxSpecificDate" class="font-regular text-gray-700">Specific Date</label>
                                </div>
                            </div>

                                {{-- download button --}}
                                <div class="flex">
                                <div class="mx-3 w-full flow-root">
                                    <button onclick="download_report_registeredUser_evaluation();" class="float-right px-4 py-2 rounded-md text-sm font-medium border-0 focus:outline-none focus:ring transition text-white bg-gray-500 hover:bg-gray-600 active:bg-gray-700 focus:ring-gray-300">Download</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- active inactive user --}}           
                    <div x-show="tab === 'activeInactiveUser'" class="w-full h-full">
                        <div class="text-gray-500 text-left font-bold">Active & Inactive User</div>
                        <hr class="my-4">
                        <div class="text-gray-600">

                            {{-- start date and end date --}}
                            <div id="userActivityBetweenDate" class="flex mb-4">
                                <div class="w-1/2 mx-3">
                                    <label for="userActivityStartDate" class="block text-sm font-medium">Start Date</label>
                                    <input type="date" id="userActivityStartDate" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm"/>
                                </div>
                                <div class="w-1/2 mx-3">
                                    <label for="userActivityEndDate" class="block text-sm font-medium">End Date</label>
                                    <input type="date" id="userActivityEndDate" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm"/>
                                </div>
                            </div>

                                {{-- date --}}
                            <div id="userActivitySpecificDate" class="flex mb-4" style="display: none">
                                <div class="mx-3 w-full">
                                    <label for="userActivityDate" class="block text-sm font-medium">Date</label>
                                    <input type="date" id="userActivityDate" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm"/>
                                </div>
                            </div>

                                {{-- checkbox specific date --}}
                            <div class="flex place-items-center mb-4 mx-3">
                                <div class="flex items-center h-5">
                                    <input id="userActivityCheckboxSpecificDate" name="registeredUserCheckboxSpecificDate" type="checkbox"
                                        class="focus:ring-1 focus:ring-gray-200 h-4 w-4 text-green-500 border-gray-300 rounded ring-0">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="userActivityCheckboxSpecificDate" class="font-regular text-gray-700">Specific Date</label>
                                </div>
                            </div>

                                {{-- download button --}}
                                <div class="flex">
                                <div class="mx-3 w-full flow-root">
                                    <button onclick="download_report_userActivity_evaluation();" class="float-right px-4 py-2 rounded-md text-sm font-medium border-0 focus:outline-none focus:ring transition text-white bg-gray-500 hover:bg-gray-600 active:bg-gray-700 focus:ring-gray-300">Download</button>
                                </div>
                            </div>
                        </div>
                    </div>       


                    {{-- completed evaluation --}}
                    <div x-show="tab === 'completedEvaluation'" class="w-full h-full">
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
    </div>
</x-app-layout-admin>

