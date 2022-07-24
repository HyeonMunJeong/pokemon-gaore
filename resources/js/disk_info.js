let is_write = -1;

const checkRequiredValue = () => {
    is_write = 1;

    const data = {
        'name': $(`input[name='name']`).val(),
        'stage': $(`select[name='stage'] option:selected`).val(),
        'star_count': $(`select[name='star_count'] option:selected`).val(),
        'energy': $(`input[name='energy']`).val(),
        'hp': $(`input[name='hp']`).val(),
        'damege': $(`input[name='damege']`).val(),
        'special_damege': $(`input[name='special_damege']`).val(),
        'defense': $(`input[name='defense']`).val(),
        'special_defense': $(`input[name='special_defense']`).val(),
        'speed': $(`input[name='speed']`).val()
    };

    for (let k in data) {
        // 0인 값도 결국 값이 없는 것으로 판단하여 key in 으로 핋수값 예외 처리
        if (!data[k]) {
            is_write = -1;
            break;
        }
    }

    return is_write;
};

$(`#save_btn`).on('click', () => {
    if (is_write < 1) {
        alert(`필수값을 입력해 주세요.`);
        return;
    }

    if (!confirm(`저장하시겠습니까?`)) {
        return;
    }

    saveInfo();
});