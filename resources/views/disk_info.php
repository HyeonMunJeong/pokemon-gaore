<?php
    require_once (__DIR__.$_ENV['ASSET_HEADER']);

    $start_emoji = "⭐";
?>
<script src="<?= $_ENV['ASSET_JS'] ?>/disk_info.js" defer></script>
<section class="hero-section detail_page">
<div class="right">
    <div class="after"></div>
    <div class="table_wrap">
        <div class="caption">기본 정보</div>
        <table class="table detail_table fixed_table">
            <colgroup>
                <col class="col_th">
                <col>
                <col class="col_th">
                <col>
            </colgroup>
            <tbody>
                <tr>
                    <th>포켓몬 이름 <span class="red_t">*</span></th>
                    <td>
                        <input type="text" class="input_string" name="name" value="" placeholder="최대 30자" maxlength="30" />    
                    </td>
                    <th>포켓몬 속성 (1) <span class="red_t">*</span></th>
                    <td>
                        <input type="text" class="input_string" name="category_id1" value="" placeholder="최대 30자" maxlength="30" />    
                    </td>
                </tr>
                <tr>
                    <th>탄수 <span class="red_t">*</span></th>
                    <td>
                        <select name="stage">
                            <?php
                                foreach ($stage_obj AS $so) {
                            ?>
                                    <option value="<?= $so['id'] ?>"><?= $so['name'] ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </td>
                    <th>포켓몬 속성 (2) <span class="red_t">*</span></th>
                    <td>
                        <input type="text" class="input_string" name="category_id2" value="" placeholder="최대 30자" maxlength="30" />
                    </td>
                </tr>
                <tr>
                    <th>성급</th>
                    <td>
                        <select name="star_count">
                            <?php
                                foreach (range(1, 5) AS $item) {
                            ?>
                                    <option value="<?= $item ?>"><?= str_repeat($start_emoji, $item) ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </td>
                    <th>공격기술</th>
                    <td>
                        <input type="text" name="skill" value="" placeholder="최대 30자" maxlength="30">
                    </td>
                </tr>
                <tr>
                    <th>에너지<span class="red_t">*</span></th>
                    <td class="mo_select_btn">
                        <input type="text" name="energy" value="">
                    </td>
                    <th>공격 속성</th>
                    <td>
                        <input type="text" name="attack_type" value="">
                    </td>
                </tr>
                <tr>
                    <th>HP</th>
                    <td>
                        <input type="text" name="hp" value="">
                    </td>
                    <th>특수기술</th>
                    <td>
                        <input type="text" name="special_skill" value="">
                    </td>
                </tr>
                <tr>
                    <th>공격</th>
                    <td>
                        <input type="text" name="damege" value="">
                    </td>
                    <th>특수기술 타입</th>
                    <td>
                        <input type="text" name="special_skill_type" value="">
                    </td>
                </tr>
                <tr>
                    <th>특수공격</th>
                    <td colspan="3">
                        <input type="text" name="special_damege" value="">
                    </td>
                </tr>
                <tr>
                    <th>방어</th>
                    <td colspan="3">
                        <input type="text" name="defense" value="">
                    </td>
                </tr>
                <tr>
                    <th>특수방어</th>
                    <td colspan="3">
                        <input type="text" name="special_defense" value="">
                    </td>
                </tr>
                <tr>
                    <th>스피드</th>
                    <td colspan="3">
                        <input type="text" name="speed" value="">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="btn_wrap">
        <button type="button" class="btn gray_line_btn">목록</button>
        <button type="button" class="btn cursor_default gray_btn" id="save_btn">저장</button>
    </div>
</section>
</body>
</html>