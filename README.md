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

## 📄 Estructura de la tabla `posts` (vehículos)

| # | Nombre            | Tipo                                      | Cotejamiento           | Nulo | Predeterminado | Extra     | Comentarios |
|---|------------------|------------------------------------------|----------------------|------|----------------|----------|-------------|
| 1 | matricula (PK)    | varchar(8)                               | utf8mb4_unicode_ci    | No   | Ninguna        |          | Clave primaria, única |
| 2 | marca             | varchar(255)                             | utf8mb4_unicode_ci    | No   | Ninguna        |          |             |
| 3 | modelo            | varchar(255)                             | utf8mb4_unicode_ci    | No   | Ninguna        |          |             |
| 4 | anio_fabricacion  | date                                     |                      | No   | Ninguna        |          |             |
| 5 | disponibilidad    | enum('si','no')                          | utf8mb4_unicode_ci    | No   | Ninguna        |          |             |
| 6 | combustible       | enum('hibrido','diesel','gasolina','electrico') | utf8mb4_unicode_ci | No   | Ninguna        |          |             |
| 7 | created_at        | timestamp                                |                      | Sí   | NULL           |          |             |
| 8 | updated_at        | timestamp                                |                      | Sí   | NULL           |          |             |

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
} ```

## 🖼️ Pruebas PostData

### 🔐 Login
![Login](img/Login.png)

### 📋 Listado de Vehiculos
![Listado](img/DataBase.png)

