<div>
    <div class="pb-4 row">
        <x-adminlte-button x-on:click="$dispatch('openModal', { component: 'user.user-modal' })" 
        label="New User"
        class="btn-flat bg-purple"
        icon="fas fa-sm fa-plus"/>
    </div>
    @php
        $heads = ['ID', 'Name', ['label' => 'Email', 'width' => 30], ['label' => 'Role', 'width' => 10], ['label' => 'Actions', 'no-export' => true, 'width' => 5]];
    @endphp
    <div class="row">
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
</div>
