<table class="table">
    <tbody>
        <tr>
            <td>
                Name
            </td>
            <td>
                {{ $user->name }}
            </td>
        </tr>

        <tr>
            <td>
                Phone
            </td>
            <td>
                {{ $user->contact->phone == "" ? '' : $user->contact->phone }}
            </td>
        </tr>

        <tr>
            <td>
                Address
            </td>
            <td>
                {{ $user->contact->address == "" ? '' : $user->contact->address }}
            </td>
        </tr>

        <tr>
            <td>
                City/State/Zip
            </td>
            <td>
                {{ $user->contact->city == "" ? '' : $user->contact->city }} / {{ $user->contact->state == "" ? '' : $user->contact->state }} / {{ $user->contact->zip == "" ? '' : $user->contact->zip }}
            </td>
        </tr>
        
        <tr>
            <td>
                E-mail
            </td>
            <td>
                {{ $user->email }}
            </td>
        </tr>

        <tr>
            <td>
                Fax
            </td>
            <td>
                {{ $user->contact->fax == "" ? '' : $user->contact->fax }}
            </td>
        </tr>

    </tbody>
</table>