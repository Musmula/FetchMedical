<table class="table">
    <tbody>
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
                City
            </td>
            <td>
                {{ $user->contact->city == "" ? 'Not set' : $user->contact->city }}
            </td>
        </tr>

        <tr>
            <td>
                ZIP
            </td>
            <td>
                {{ $user->contact->zip == "" ? 'Not set' : $user->contact->zip }}
            </td>
        </tr>

        <tr>
            <td>
                FAX
            </td>
            <td>
                {{ $user->contact->fax == "" ? 'Not set' : $user->contact->fax }}
            </td>
        </tr>

    </tbody>
</table>