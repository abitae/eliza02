<div>
    <div class="pb-4 row">
        <x-adminlte-button x-on:click="$dispatch('openModal', { component: 'user.user-modal' })" label="New User"
            class="btn-flat bg-purple" icon="fas fa-sm fa-plus" />
        <button type="button" class="m-1 btn btn-primary" id="btnOpenSaltB">Open Sweetalert2 (Basic)</button>
        <button type="button" class="m-1 btn btn-success" id="btnOpenSaltC">Open Sweetalert2 (Custom)</button>
    </div>
    @php
        $heads = ['ID', 'Name', ['label' => 'Email', 'width' => 30], ['label' => 'Role', 'width' => 10], ['label' => 'Actions', 'no-export' => true, 'width' => 5]];
    @endphp
    <div wire:ignore class="row">
        <x-adminlte-datatable id="userTable" :heads="$heads" head-theme="light" bordered hoverable with-buttons>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><span class="badge badge-success">{{ $user->getRoleNames()->first() }}</span></td>
                    <td>
                        <nobr>
                            <button id="{{ $user->id }}" class="mx-1 shadow btn btn-xs btn-default text-primary"
                                title="Edit">
                                <i class="fa fa-lg fa-fw fa-pen"></i>
                            </button>
                            <button class="mx-1 shadow btn btn-xs btn-default text-danger" title="Delete">
                                <i class="fa fa-lg fa-fw fa-trash"></i>
                            </button>
                            <button class="mx-1 shadow btn btn-xs btn-default text-teal" title="Details">
                                <i class="fa fa-lg fa-fw fa-eye"></i>
                            </button>
                        </nobr>
                    </td>
                </tr>
            @endforeach
        </x-adminlte-datatable>
    </div>
    @push('js')
        <script>
            $(document).ready(function() {
                $('#btnOpenSaltB').click(function() {
                    Swal.fire(
                        'Good job!',
                        'You clicked the button!',
                        'success'
                    );
                });

                var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });

                $('#btnOpenSaltC').click(function() {
                    Toast.fire({
                        icon: 'success',
                        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                    });
                });
            })
        </script>
    @endpush
</div>
