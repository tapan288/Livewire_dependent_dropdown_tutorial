<div>
    <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
        {{ csrf_field() }}
        <div class="card-body">
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="status">Select Class</label>
                    <select class="form-control" wire:model="selectedClass">
                        <option value="">Select a Class</option>
                        @foreach ($classes as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            @if (!is_null($sections))
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="status">Select a Section</label>
                    <select class="form-control" wire:model="selectedSection">
                        <option value="">Select a Section</option>
                        @foreach ($sections as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            @endif

            {{ $selectedSection }}



        </div>

        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">Add Assignment</button>
            <div wire:loading>
                Hold On...
            </div>
        </div>
        <!-- /.card-footer -->
    </form>
</div>
