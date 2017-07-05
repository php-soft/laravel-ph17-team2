    <div class="container">
        <div class="form-group">
            {!! Form::label('name', 'Tên sản phẩm') !!}
            <div class="form-conrols">
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('category_id', 'Danh Mục chính') !!}
            <div class="form-conrols">
                {!! $categories !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('price', 'Giá đề nghị - VNĐ') !!}
            <div class="form-conrols">
                {!! Form::text('price', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('image', 'Ảnh') !!}
            <div class="form-conrols">
                {!! Form::text('image', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Chi Tiết Sản Phẩm') !!}
            <div class="form-conrols">
                {!! Form::textarea('description', null, ['class' => 'form-control ckeditor']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('alias', 'Alias') !!}
            <div class="form-conrols">
                {!! Form::text('alias', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
