    <div class="container">
        <div class="form-group">
            {!! Form::label('', 'Tên cửa hàng') !!}
            {!! Form::label('', $shop->name, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('name', 'Tên sản phẩm') !!}
            <div class="form-conrols">
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('categories', 'Danh Mục chính') !!}
            <div class="form-conrols">
                {!! Form::select('categories', $categories, null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('price', 'Giá - VNĐ') !!}
            <div class="form-conrols">
                {!! Form::text('price', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('quantity', 'Số Lượng') !!}
            <div class="form-conrols">
                {!! Form::number('quantity', null, ['class' => 'form-control', 'min' => 1]) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('discount', 'Giảm giá') !!}
            <div class="form-conrols">
                {!! Form::text('discount', null, ['class' => 'form-control']) !!}
            </div>
            {{-- giảm giá > 0 --}}
        </div>
        <div class="form-group">
            {!! Form::label('image', 'Ảnh') !!}
            <div class="form-conrols">
                {!! Form::file('image', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Chi Tiết Sản Phẩm') !!}
            <div class="form-conrols">
                {!! Form::textarea('description', null, ['class' => 'form-control', 'ro']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('alias', 'Alias') !!}
            <div class="form-conrols">
                {!! Form::text('alias', null, ['class' => 'form-control', 'ro']) !!}
            </div>
        </div>
        {{-- {!! Form::hidden('shop_id', $user->shop->id) !!} --}}
        {!! Form::hidden('user_id', $user->id) !!}
        {!! Form::hidden('shop_id', $shop->id) !!}
        {!! Form::submit('Tạo sản phẩm', ['class' => 'btn btn-primary']) !!}
    </div>
