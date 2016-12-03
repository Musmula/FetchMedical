<table class="table" style="text-align: center;">
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
                E-mail
            </td>
            <td>
                {{ $user->email }}
            </td>
        </tr>
        <tr>
            <td>
                Account type
            </td>
            <td>
                {{ $user->is_admin ? 'Administrator' : 'Regular user' }}
            </td>
        </tr>
    </tbody>
</table>