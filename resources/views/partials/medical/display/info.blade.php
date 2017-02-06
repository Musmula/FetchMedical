<table class="table">

    <tr>
        <td>
            Weight
        </td>
        <td>
            {{ $info->weight }}
        </td>
    </tr>

    <tr>
        <td>
            Weight date
        </td>
        <td>
            {{ $info->weight_date }}
        </td>
    </tr>
    
    <tr>
        <td>
            Microchip #
        </td>
        <td>
            {{ $info->microchip_id }}
        </td>
    </tr>
    
    <tr>
        <td>
            Microchip vendor
        </td>
        <td>
            {{ $info->microchip_co }}
        </td>
    </tr>
    
    <tr>
        <td>
            Insurance policy
        </td>
        <td>
            {{ $info->insurrance_policy }}
        </td>
    </tr>
    
    <tr>
        <td>
            Insurance company
        </td>
        <td>
            {{ $info->insurrance_co }}
        </td>
    </tr>
    
    <tr>
        <td>
            Conditions
        </td>
        <td>
            <textarea readonly class="display" rows="4">{{ $info->conditions }}</textarea>
        </td>
    </tr>
    
    <tr>
        <td>
            Rabies date
        </td>
        <td>
            {{ $info->rabies_date }}
        </td>
    </tr>
    
    <tr>
        <td>
            Rabies company
        </td>
        <td>
            {{ $info->rabies_co }}
        </td>
    </tr>
        
    <tr>
        <td>
            Fecal test
        </td>
        <td>
            {{ $info->fecal_test }}
        </td>
    </tr>
        
    <tr>
        <td>
            Fecal test results
        </td>
        <td>
            {{ $info->fecal_test_results }}
        </td>
    </tr>
        
    <tr>
        <td>
            Dental date
        </td>
        <td>
            {{ $info->dental_date }}
        </td>
    </tr>
        
    <tr>
        <td>
            Dental notes
        </td>
        <td>
            <textarea readonly class="display" rows="4">{{ $info->dental_notes }}</textarea>
        </td>
    </tr>
        
    <tr>
        <td>
            Other vaccine
        </td>
        <td>
            {{ $info->other_vaccine }}
        </td>
    </tr>
        
    <tr>
        <td>
            Other vaccine date
        </td>
        <td>
            {{ $info->other_vaccine_date }}
        </td>
    </tr>
        
    <tr>
        <td>
            Other vaccine notes
        </td>
        <td>
            <textarea readonly class="display" rows="4">{{ $info->other_vaccine_notes }}</textarea>
        </td>
    </tr>
        
    <tr>
        <td>
            Notes
        </td>
        <td>
            <textarea readonly class="display" rows="4">{{ $info->notes }}</textarea>
        </td>
    </tr>

</table>