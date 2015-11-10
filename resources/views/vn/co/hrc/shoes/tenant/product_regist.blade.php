@extends('templates.master')

@section('titleOfHead', trans('caption_product_regist.0001'))

@section('content')
    <form>
        <table>
            <tr>
                <th>
                    <label>Tên sản phẩm</label>
                </th>
                <td>
                    <input type="text" id="productName" name="productName" />
                </td>
            </tr>
            <tr>
                <th>
                    <label>Màu sắc</label>
                </th>
                <td>
                    <input type="text" id="productName" name="productName" />
                </td>
            </tr>
            <tr>
                <th>
                    <label>Xuất xứ</label>
                </th>
                <td>
                    <input type="text" id="productName" name="productName" />
                </td>
            </tr>
            <tr>
                <th>
                    <label>Thương hiệu</label>
                </th>
                <td>
                    <select>
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>
                    <label>Mô tả</label>
                </th>
                <td>
                    <input type="text" id="productName" name="productName" />
                </td>
            </tr>
            <tr>
                <th>
                    <label>Hình Ảnh</label>
                </th>
                <td>
                    <input type="text" id="productName" name="productName" />
                </td>
            </tr>
        </table>
    </form>
@endsection