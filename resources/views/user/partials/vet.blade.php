<table class="table">
    <tbody>
        <tr>
            <td>
                Name
            </td>
            <td>
                {{ $user->vet->name == "" ? '' : $user->vet->name }}
            </td>
        </tr>
        <tr>
            <td>
                Phone
            </td>
            <td>
                {{ $user->vet->phone == "" ? '' : $user->vet->phone }}
            </td>
        </tr>

        <tr>
            <td>
                Address
            </td>
            <td>
                {{ $user->vet->address == "" ? '' : $user->vet->address }}
            </td>
        </tr>

        <tr>
            <td>
                City/State/Zip
            </td>
            <td>
                {{ $user->vet->city == "" ? '' : $user->vet->city }} / {{ $user->vet->state == "" ? '' : $user->vet->state }} / {{ $user->vet->zip == "" ? '' : $user->vet->zip }}
            </td>
        </tr>

        <tr>
            <td>
                E-mail
            </td>
            <td>
                {{ $user->vet->email == "" ? '' : $user->vet->email }}
            </td>
        </tr>

        <tr>
            <td>
                Fax
            </td>
            <td>
                {{ $user->vet->fax == "" ? '' : $user->vet->fax }}
            </td>
        </tr>

    </tbody>
</table>