<div class="container">
    {{-- <div class="form-group">
        {!! Form::label('category', 'Danh Mục chính') !!}
        <div class="form-conrols">
            <select multiple class="form-control" id="category">
            @foreach($categories as $category)
                <option>{{ $category->name }}</option>
            </select>
        </div>
    </div> --}}
    <div class="form-group">
        {!! Form::label('name', 'Tên Danh Mục Chính') !!}
        <div class="form-conrols">
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('slug', 'Slug') !!}
        <div class="form-conrols">
            {!! Form::text('slug', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('discription', 'Mô Tả') !!}
        <div class="form-conrols">
            {!! Form::text('discription', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    {{ Form::hidden('parent_id', 0) }}
</div>