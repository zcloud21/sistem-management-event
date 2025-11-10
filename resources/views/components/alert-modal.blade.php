@props([
'name' => 'confirmation-modal',
])

<div

    x-data="{

        show: false,

        formToSubmit: null,

        title: 'Konfirmasi Tindakan',

        message: 'Apakah Anda yakin ingin melanjutkan tindakan ini?',

        needsReason: false, // New property

        reasonInput: '',    // New property

        reasonLabel: 'Alasan', // New property

        reasonPlaceholder: 'Masukkan alasan...', // New property



                confirmAction() { // Renamed from confirm



                    if (this.formToSubmit) {



                        const form = document.getElementById(this.formToSubmit);



                        if (form) {



                            if (this.needsReason) {



                                // Create a hidden input for the reason and append to the form



                                const input = document.createElement('input');



                                input.type = 'hidden';



                                input.name = 'invalidation_reason'; // Name matches controller validation



                                input.value = this.reasonInput;



                                form.appendChild(input);



                                console.log('Adding hidden input:', input); // Debug line



                            }



                                                console.log('Submitting form:', form); // Debug line



                                                console.log('Form method:', form.method); // Debug line



                                                console.log('Form action:', form.action); // Debug line



                                                console.log('Form classList:', form.classList); // Debug line



                            



                                                // Temporarily remove the class to bypass app.js listener



                                                form.classList.remove('needs-confirmation');



                            



                                                form.submit();



        



                            // Note: If the page does not reload after submission,



                            // and this form needs to be confirmed again, you would need



                            // to re-add the 'needs-confirmation' class.



                            // For this specific use case (invalidation), a page reload is expected.



        



                        } else {



                            console.error('Form tidak ditemukan:', this.formToSubmit);



                        }



                    }



                    this.show = false;



                    this.reasonInput = ''; // Clear reason input



                    this.needsReason = false; // Reset needsReason



                },

        cancelAction() { // Renamed from cancel

            this.show = false;

            this.reasonInput = ''; // Clear reason input

            this.needsReason = false; // Reset needsReason

        }

    }"

    x-init="

        window.addEventListener('open-confirmation-data', (event) => {

            formToSubmit = event.detail.formId;

            title = event.detail.title || 'Konfirmasi Tindakan';

            message = event.detail.message || 'Apakah Anda yakin ingin melanjutkan tindakan ini?';

            needsReason = event.detail.needsReason || false; // Set needsReason

            reasonLabel = event.detail.reasonLabel || 'Alasan'; // Set reasonLabel

            reasonPlaceholder = event.detail.reasonPlaceholder || 'Masukkan alasan...'; // Set reasonPlaceholder

            reasonInput = ''; // Clear previous input

            show = true;

            console.log('Modal dibuka:', event.detail);

        });

    "

    @keydown.escape.window="cancelAction()"

    x-show="show"

    class="fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"

    style="display: none;">

    <!-- Backdrop -->

    <div

        x-show="show"

        class="fixed inset-0 transform transition-all"

        @click="cancelAction()"

        x-transition:enter="ease-out duration-300"

        x-transition:enter-start="opacity-0"

        x-transition:enter-end="opacity-100"

        x-transition:leave="ease-in duration-200"

        x-transition:leave-start="opacity-100"

        x-transition:leave-end="opacity-0">

        <div class="absolute inset-0 bg-gray-500 dark:bg-gray-900 opacity-75"></div>

    </div>



    <!-- Modal Box -->

    <div

        x-show="show"

        class="mb-6 bg-white dark:bg-gray-800 rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:max-w-2xl sm:mx-auto"

        x-transition:enter="ease-out duration-300"

        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"

        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"

        x-transition:leave="ease-in duration-200"

        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"

        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">

        <form class="p-6">

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100" x-text="title">

                Konfirmasi Tindakan

            </h2>



            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400" x-text="message">

                Apakah Anda yakin ingin melanjutkan tindakan ini?

            </p>



            {{-- Reason input field (conditionally rendered) --}}

            <div x-show="needsReason" class="mt-4">

                <x-input-label for="reason_input" x-text="reasonLabel" />

                <x-text-input id="reason_input" x-model="reasonInput" type="text" class="mt-1 block w-full" x-bind:placeholder="reasonPlaceholder" required />

                <p x-show="needsReason && reasonInput.trim() === ''" class="mt-2 text-sm text-red-600">Alasan harus diisi.</p>

            </div>



            <div class="mt-6 flex justify-end gap-3">

                <button

                    type="button"

                    @click="cancelAction()"

                    class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150">

                    Batal

                </button>



                <button

                    type="button"

                    @click="confirmAction()"

                    :disabled="needsReason && reasonInput.trim() === ''" {{-- Disable if reason is required and empty --}}

                    class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150">

                    Konfirmasi

                </button>

            </div>

        </form>

    </div>

</div>
