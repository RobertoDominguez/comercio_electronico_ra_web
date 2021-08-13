@extends('administrator.layouts.header2')

@section('title')
    Crear Producto
@endsection

@section('content')
    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title">
                Crear Producto
            </h3>
            <div class="card-toolbar">
                <div class="example-tools justify-content-center">

                </div>
            </div>
        </div>
        <form action="{{ route('administrator.product.store') }}" method="POST" class="form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-body">
                @if ($errors->any())
                <div class="pb-13 pt-lg-0 pt-5">
                    <div class="alert alert-primary">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
                <div class="form-group form-group-last">
                    <div class="alert alert-custom alert-default" role="alert">
                        <div class="alert-icon">
                            <span class="svg-icon svg-icon-primary svg-icon-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path
                                            d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z"
                                            fill="#000000" opacity="0.3" />
                                        <path
                                            d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z"
                                            fill="#000000" fill-rule="nonzero" />
                                    </g>
                                </svg>
                            </span>
                        </div>
                        <div class="alert-text">
                            Crear producto 
                        </div>
                    </div>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> {{ __('admin.verify_the_data') }}<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group">
                    <label for="exampleSelect1">Descuentos</label>
                    <select name="discount_id" class="form-control" id="exampleSelect1">
                        @foreach ($discounts as $discount)
                            <option value="{{ $discount->id }}">{{ $discount->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="name" class="form-control form-control-solid" name="name"
                        placeholder="Introduce el nombre del producto" required />
                </div>
                <div class="form-group">
                    <label>Descripción</label>
                    <input type="name" class="form-control form-control-solid" name="description"
                        placeholder="Introduce la descripcion del producto" required />
                </div>
                <div class="form-group">
                    <label>Precio</label>
                    <input type="number" class="form-control form-control-solid" name="price"
                        placeholder="Introduce el precio del producto" required />
                </div>
                <div class="form-group">
                    <label>Inventario</label>
                    <input type="number" class="form-control form-control-solid" name="stock"
                        placeholder="Introduce el stock del producto" required />
                </div>
                <div class="form-group">
                    <label>Imagen</label>
                    <div></div>
                    <div class="custom-file">
                        <input name="image" type="file" class="custom-file-input" id="customFile"
                            onchange="validarFile2(this);" />
                        <label class="custom-file-label" for="customFile">Subir Imagen</label>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-primary mr-2" value="Guardar">
                <a href="{{ route('administrator.product.index') }}" type="reset"
                    class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>

    <script>
        function validarFile(all) {
            var extensiones_permitidas = [".mp4", '.mpeg-4', '.avi', '.mkv', '.flv'];
            var tamano = 1024;
            var rutayarchivo = all.value;
            var ultimo_punto = all.value.lastIndexOf(".");
            var extension = rutayarchivo.slice(ultimo_punto, rutayarchivo.length);
            if (extensiones_permitidas.indexOf(extension) == -1) {
                alert("Extensión de archivo no valida");
                document.getElementById(all.id).value = "";
                return;
            }
            if ((all.files[0].size / 1057648) > tamano) {
                alert("El archivo no puede superar los " + tamano + "MB");
                document.getElementById(all.id).value = "";
                return;
            }
        }

    </script>

<script>
    function validarFile2(all) {
        var extensiones_permitidas = ['.jpeg','.jpg','.png'];
        var tamano = 512;
        var rutayarchivo = all.value;
        var ultimo_punto = all.value.lastIndexOf(".");
        var extension = rutayarchivo.slice(ultimo_punto, rutayarchivo.length);
        if (extensiones_permitidas.indexOf(extension) == -1) {
            alert("Extensión de archivo no valida");
            document.getElementById(all.id).value = "";
            return;
        }
        if ((all.files[0].size / 1057648) > tamano) {
            alert("El archivo no puede superar los " + tamano + "MB");
            document.getElementById(all.id).value = "";
            return;
        }
    }

</script>

@endsection