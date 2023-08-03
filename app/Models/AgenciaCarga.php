<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgenciaCarga extends Model
{
    use HasFactory;

    protected $table = 'agencia_carga';

    protected $fillable = [
        'nombre_fiscal',
        'rfc',
        'no_caat',
        'nombre_comercial',
        'calle',
        'codigo_postal',
        'numero_interior',
        'numero_exterior',
        'colonia',
        'delegacion',
        'estado',
        'tipo_alta',
        'metodo_transmision',
        'correo_acceso',
        'vigencia_caat_inicio',
        'vigencia_caat_vencimiento',
        'dato_vucem_usuario',
        'dato_vucem_contrasenia',
        'banco',
        'cuenta',
        'metodo_pago',
        'regimen_fiscal',
        'forma_pago',
        'uso_cfdi',
        'representante_legal',
        'email',
        'telefono',
        'uso_exclusivo_tarifa',
        'uso_exclusivo_referencia',
        'uso_exclusivo_id',
        'contacto_cuentas',
        'email_cuentas',
        'telefono_cuentas',
        'enviado',
    ];

    // Puedes agregar relaciones o métodos adicionales aquí si es necesario
}
