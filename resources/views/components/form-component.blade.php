<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script
<div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
        <div class="border-t border-gray-200"></div>
    </div>
</div>

<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="mt-5 md:col-span-2 md:mt-0">
            <form action="/calculate" method="POST">
                @csrf
                <div class="overflow-hidden shadow sm:rounded-md">
                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                        <fieldset>
                            <legend class="sr-only">Detailniveau</legend>
                            <div class="text-base font-medium text-gray-900" aria-hidden="true">Detailniveau
                            <div class="flex items-start">
                                <div class="flex h-5 items-center">
                                    <input id="grof" value="grof" name="det" type="radio" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="grof" class="font-medium text-gray-700">Grof (Factor 1)</label>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex h-5 items-center">
                                    <input id="medium" name="det" value="medium" type="radio" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="medium" class="font-medium text-gray-700">Medium (Factor 3)</label>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex h-5 items-center">
                                    <input id="fijn" name="det" value="fijn" type="radio" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="fijn" class="font-medium text-gray-700">Fijn (Factor 5)</label>
                                </div>
                            </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend class="sr-only">Materiaal</legend>
                            <div class="text-base font-medium text-gray-900" aria-hidden="true">Materiaal
                            <div class="flex items-start">
                                <div class="flex h-5 items-center">
                                    <input id="abs" name="mat" value="abs" type="radio" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="abs" class="font-medium text-gray-700">ABS (€1,00 P/M)</label>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex h-5 items-center">
                                    <input id="pla" name="mat" value="pla" type="radio" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="pla" class="font-medium text-gray-700">PLA (€1,50 P/M)</label>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex h-5 items-center">
                                    <input id="koper" name="mat" value="koper" type="radio" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="koper" class="font-medium text-gray-700">Koper (€3,00 P/M)</label>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex h-5 items-center">
                                    <input id="aluminium" name="mat" value="aluminium" type="radio" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="aluminium" class="font-medium text-gray-700">Aluminium (€5,00 P/M)</label>
                                </div>
                            </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend class="sr-only">Spoed?</legend>
                            <div class="text-base font-medium text-gray-900" aria-hidden="true">Spoed?
                            <div class="flex items-start">
                                <div class="flex h-5 items-center">
                                    <input id="spoed" name="spoed" type="radio" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="spoed" class="font-medium text-gray-700">Spoed (Factor 1,5)</label>
                                </div>
                            </div>
                            <div class="mt-2 col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="postal-code" class="font-medium text-gray-700">Aantal Meter</label>
                                <input  required type="text" name="meter" id="meter" autocomplete="meter" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // $('input[type="checkbox"]').on('change', function() {
    //     $(this).siblings('input[type="checkbox"]').prop('checked', false);
    // });
    $('input[type="checkbox"]').on('change', function() {
        $('input[name="' + this.name + '"]').not(this).prop('checked', false);
    });

    function myFunction() {
        console.log('test')
    }
</script>
