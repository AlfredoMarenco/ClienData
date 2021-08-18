<div>
    <div class="bg-white mt-2 pt-4 shadow-md rounded-md px-8">
        <h2 class="text-xl font-bold mb-2">Enviar email</h2>
        <div class="grid grid-cols-4 gap-4">
            <div class="mt-2 col-span-2">
                <div wire:ignore>
                    <label class="block" for="">Para:</label>
                    <select class="select2 form-input" wire:model="to">
                        @foreach ($leads as $lead)
                            <option value="{{ $lead->id }}">{{ $lead->fullName() }}</option>
                        @endforeach
                    </select>
                </div>
                @error('to')
                    <span clasS="text-xs text-red-700"> {{ $message }}</span>
                @enderror
            </div>

            <div class="col-span-2">
                {{ $body }}
            </div>

            <div class="mt-4 col-span-4">
                <div wire:ignore>
                    <textarea id="editor" wire:model='body'></textarea>
                </div>
                @error('body')
                    <span clasS="text-xs text-red-700"> {{ $message }}</span>
                @enderror
            </div>

            <div>
                <button class="px-2 bg-gray-800 text-white font-bold" wire:click="sendEmail">
                    Enviar
                </button>
            </div>

            <script type="text/javascript" src="https://plugins.stripo.email/static/latest/stripo.js"></script>
        </div>




        @push('js')
            <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
            <script>
                document.addEventListener('livewire:load', function() {
                    $('.select2').select2();
                    $('.select2').on('change', function() {
                        @this.set('to', this.value)
                    });

                    CKEDITOR.replace( 'editor' );
                })
            </script>
           {{--  <script>
                ClassicEditor
                    .create(document.querySelector('#editor'), {
                        toolbar: ['bold', 'italic', 'link', 'undo', 'redo', 'numberedList', 'bulletedList']
                    })
                    .then(function(editor) {
                        editor.model.document.on('change:data', () => {
                            @this.set('body', editor.getData());
                        })
                    })
                    .catch(error => {
                        console.error(error);
                    });
            </script> --}}
        @endpush
    </div>
</div>
