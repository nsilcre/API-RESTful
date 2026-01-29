# 🚗 API RESTful – Gestión de Vehículos (Laravel)

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="350">
  </a>
</p>

## 📌 Descripción del proyecto

Este proyecto es una **API RESTful desarrollada en Laravel** para la gestión de vehículos, permitiendo crear, consultar, actualizar y eliminar registros de forma estructurada mediante JSON.

Cada vehículo se identifica mediante una **matrícula española válida** como clave primaria.

---

## ⚙️ Tecnologías utilizadas

- Laravel
- PHP
- MySQL
- API REST JSON

---

## 📄 Modelo de datos

| Campo | Tipo | Descripción |
|-------|------|------------|
| matricula | string (PK) | Formato español: 1234 ABC |
| marca | string | Marca del vehículo |
| modelo | string | Modelo |
| anio_fabricacion | date | Año de fabricación |
| disponibilidad | string | si / no |
| combustible | string | hibrido, diesel, gasolina, electrico |

---

## 📬 Ejemplo de JSON

```json
{
  "matricula": "1234 BCD",
  "marca": "Toyota",
  "modelo": "Corolla",
  "anio_fabricacion": "2020-01-01",
  "disponibilidad": "si",
  "combustible": "hibrido"
}
