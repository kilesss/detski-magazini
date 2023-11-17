@include('admin.components.header')
<div class="page-container iconic-view">
    <!--Leftbar Start Here -->
   @include('admin.components.leftMenu')
    <div class="page-content">
        <!--Topbar Start Here -->
        @include('admin.components.topMenu')
        <div class="main-container">
            <!--Content of the pafe -->
            <form method="POST" action="{{ route('admin.downloadProducts') }}">
            @csrf
                <button type="submit">Изтегли продукти</button>
            </form>
        </div>
        <div class="main-container">
            <!--Content of the pafe -->
            <form method="POST" action="{{ route('admin.downloadProductsList') }}">
                @csrf
                <button type="submit">Изтегли списък продукти</button>
            </form>
        </div>
    </div>
</div>
@include('admin.components.footer')
