@php
$iconStyles = 'color:' . $form['styling']['color']. ';';
if($form['styling']['type'] === 'builder') {
$dropStyles = '';

foreach($form['styling']['builder'] as $row) {
if(isset($row['offsetX']) && isset($row['offsetY']) && isset($row['blur']) && isset($row['color'])) {
$dropStyles .= " drop-shadow({$row['offsetX']} {$row['offsetY']} {$row['blur']} {$row['color']})";
}
}
$iconStyles .= "filter: {$dropStyles}; -webkit-filter: {$dropStyles}";
} else {
$iconStyles .= $form['styling']['shadow'];
}
@endphp

<div class="flex items-center justify-center w-full h-full p-12" style="background: {{ $form['background']['color'] }}">
    @if ($form['icon'])
    <x-dynamic-component :component="$form['icon']" class="w-full h-full" :style="$iconStyles" />
    @endif
</div>