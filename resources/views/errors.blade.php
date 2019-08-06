<style>
#errors{
  list-style-type: none;
  font-weight: bold;
}
</style>
@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul id="errors">
            @foreach ($errors->all() as $error)
                <li>- {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
