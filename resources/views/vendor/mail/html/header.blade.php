@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('img/logo_baja_aerospace_cluster_color.png') }}" alt="Baja Aerospace Cluster Logo" width="200px" height="auto">
@else
<img src="{{ asset('img/logo_baja_aerospace_cluster_color.png') }}" alt="Baja Aerospace Cluster Logo" width="200px" height="auto">
@endif
</a>
</td>
</tr>
