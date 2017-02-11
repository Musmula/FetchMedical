<table class="table">
    <tbody>
        <tr>
            <td>
                Name
            </td>
            <td>
                {{ $user->vet->name == "" ? 'Not set' : $user->vet->name }}
            </td>
        </tr>
        <tr>
            <td>
                Phone
            </td>
            <td>
                {{ $user->vet->phone == "" ? 'Not set' : $user->vet->phone }}
            </td>
        </tr>

        <tr>
            <td>
                Address
            </td>
            <td>
                {{ $user->vet->address == "" ? 'Not set' : $user->vet->address }}
            </td>
        </tr>

        <tr>
            <td>
                City/State/Zip
            </td>
            <td>
                {{ $user->vet->city == "" ? 'Not set' : $user->vet->city }} / {{ $user->vet->state == "" ? 'Not set' : $user->vet->state }} / {{ $user->vet->zip == "" ? 'Not set' : $user->vet->zip }}
            </td>
        </tr>

        <tr>
            <td>
                E-mail
            </td>
            <td>
                {{ $user->vet->email == "" ? 'Not set' : $user->vet->email }}
            </td>
        </tr>

        <tr>
            <td>
                Fax
            </td>
            <td>
                {{ $user->vet->fax == "" ? 'Not set' : $user->vet->fax }}
            </td>
        </tr>

    </tbody>
</table>