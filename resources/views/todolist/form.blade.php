    <div class="row my-4 mx-2">
        <div class="col-sm-3 control-label">タイトル</div>
        <div class="col-sm-9">
            <input type="text" name="title" value="{{ old('title', $todolist->title) }}" class="form-control @if($errors->has('title')) is-invalid @endif">
            @if($errors->has('title')) <span class="text-danger">{{ $errors->first('title') }}</span> @endif
        </div>
    </div>
    <div class="row my-4 mx-2">
        <div class="col-sm-3 control-label">メモ</div>
        <div class="col-sm-9">
            <textarea name="memo" id="memo" class="form-control @if($errors->has('memo')) is-invalid @endif">{{ old('memo', $todolist->memo) }}</textarea>
            @if($errors->has('memo')) <span class="text-danger">{{ $errors->first('memo') }}</span> @endif
        </div>
    </div>
