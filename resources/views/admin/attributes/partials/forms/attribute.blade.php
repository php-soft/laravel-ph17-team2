<div class="container">
    <div class="form-group">
        {!! Form::label('category_id', 'Danh Mục chính') !!}
        <div class="form-conrols sc">
            {!! $categories !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('name', 'Tên Thuộc Tính') !!}
        <div class="form-conrols">
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>