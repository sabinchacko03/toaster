<div>
    <div id="myToast"
        @if ($type == '') class="hidden"       
    @else
    class='fixed right-10 top-5 px-5 py-4 flex items-center w-full max-w-xs text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800' @endif>

        <div
            @if ($type == 'fail') class='inline-flex items-center justify-center flex-shrink-0 w-8 h-8  text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200' @elseif($type == 'warning') class='inline-flex items-center justify-center flex-shrink-0 w-8 h-8  text-orange-500 bg-orange-100 rounded-lg dark:bg-orange-700 dark:text-orange-200' @elseif($type == 'success') class='inline-flex items-center justify-center flex-shrink-0 w-8 h-8  text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200' @endif>

            @switch($type)
                @case('fail')
                    <x-toaster::svg.close />
                @break

                @case('warning')
                    <x-toaster::svg.warning-triangle />
                @break

                @case('success')
                    <x-toaster::svg.check />
                @break

                @default
            @endswitch

            <span class="sr-only">Check icon</span>
        </div>
        <div class="ml-3 text-sm font-normal">
            {{ $message }}
        </div>
        <button type="button"
            class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
            data-dismiss-target="#toast-success" aria-label="Close"
            onclick='document.getElementById("myToast").classList.add("hidden")'>
            <span class="sr-only">Close</span>
            <x-toaster::svg.close />
        </button>
    </div>


    <script>
        document.addEventListener('livewire:load', function() {
            setTimeout(function() {
                document.getElementById("myToast").style.opacity = '0';
                document.getElementById("myToast").style.transition =
                    'visibility 0s linear 0.5s,opacity 0.5s linear';
                document.getElementById("myToast").style.visibility = 'hidden';
            }, 3000);
        })
    </script>
</div>
