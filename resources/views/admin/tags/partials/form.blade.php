<div class="form-group">
    {!! Form::label('name','Nombre:') !!}
    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre de la etiqueta.']) !!}
    @error('slug')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('slug','Slug:') !!}
    {!! Form::text('slug',null,['class'=>'form-control','placeholder'=>'Ingrese el Slug de la etiqueta.','readonly']) !!}

    @error('name')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('color','Color:') !!}
    {!! Form::select('color',$colors,null,['class'=>'form-control']) !!}

    @error('color')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>
