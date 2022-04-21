<div class="w-full">
    {{-- Care about people's approval and you will be their prisoner. --}}

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- We've used 3xl here, but feel free to try other max-widths based on your needs -->
        <div class="max-w-3xl mx-auto">
            <!-- Content goes here -->

                <div class="space-y-6">

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700"> Modus </label>
                        <div class="mt-1">
                            <select wire:model="mode"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="0">Latein zu VOTOX</option>
                                <option value="1">Deutsch zu VOTOX</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700"> Eingabe </label>
                        <div class="mt-1">
                            <textarea wire:model="input" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </textarea>
                        </div>
                    </div>

                    <div>
                        <button wire:click="convert" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Übersetzen</button>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700"> Ausgabe </label>
                        <div class="mt-1">
                            <textarea wire:model="output"
                                      id="output"
                                      readonly
                                      class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </textarea>
                        </div>
                    </div>

                    <div class="flex gap-x-4">
                        <button wire:click="clear" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Clear</button>
                        <button onclick="copyToClipboard()" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Copy</button>
                    </div>
                </div>
        </div>
    </div>

    <script>

        async function copyToClipboard()
        {
            let copyText = document.getElementById("output");

            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */

            /* Copy the text inside the text field */
            await navigator.clipboard.writeText(copyText.value);

            /* Alert the copied text */
            //alert("Copied the text: " + copyText.value);
        }

    </script>
</div>
