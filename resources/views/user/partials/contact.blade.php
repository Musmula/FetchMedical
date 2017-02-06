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
                {{ $user->contact->phone == "" ? 'Not set' : $user->contact->phone }}
            </td>
        </tr>

        <tr>
            <td>
                Address
            </td>
            <td>
                {{ $user->contact->address == "" ? 'Not set' : $user->contact->address }}
            </td>
        </tr>

        <tr>
            <td>
                City/State/Zip
            </td>
            <td>
                {{ $user->contact->city == "" ? 'Not set' : $user->contact->city }}
            </td>
        </tr>

        <tr>
            <td>
                Zip
            </td>
            <td>
                {{ $user->contact->zip == "" ? 'Not set' : $user->contact->zip }}
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
                {{ $user->contact->fax == "" ? 'Not set' : $user->contact->fax }}
            </td>
        </tr>

    </tbody>
</table>