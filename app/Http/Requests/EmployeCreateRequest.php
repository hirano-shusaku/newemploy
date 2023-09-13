<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'yomigana' => ['required', 'string', 'max:100'],
            'company' => ['required', 'string', 'max:100'],
            'Tnumber' => ['string', 'max:100', 'nullable' ],
            'depart' => ['required', 'string', 'max:100'],
            'section' => ['required', 'string', 'max:100'],
            'job' => ['required', 'string', 'max:100'],
            'firstDay' => ['required', 'date', ],
            'startDay' => ['required', 'date', ],
            'endDay' => ['required', 'date', ],
            'term' => ['required', 'decimal:0,1'],
            'workType' => ['required', 'string', 'max:100'],
            'hcost' => ['required', 'integer'],
            'tmcost' => ['integer', 'nullable'],
            'tdcost' => ['integer',  'nullable'],
            'troute' => ['string', 'max:100', 'nullable'],
            'pnumber' => ['string', 'max:100', 'nullable'],
            'pname' => ['string', 'max:100', 'nullable'],
            'tcontent' => ['required', 'string', 'max:250'],
            'HAname' => ['required', 'string', 'max:100'],
            'HAemail' => ['required', 'email', 'max:100'],
            'remark' => ['string', 'max:1000', 'nullable'],
            'confirmer' => ['required', 'string', 'max:100'],
            'Cemail' => ['required', 'email', 'max:100'],
            'CostMemo' => ['string', 'max:1000', 'nullable'],
            'kairan1' => ['string', 'max:100'],
            'kairan2' => ['string', 'max:100', 'nullable'],
            'kairan3' => ['string', 'max:100', 'nullable'],
            'kairan4' => ['string', 'max:100', 'nullable'],
            'kairan5' => ['string', 'max:100', 'nullable'],
            'CCmycompany1' => ['email', 'max:100', 'nullable'],
            'CCmycompany2' => ['email', 'max:100', 'nullable'],
            'CCmycompany3' => ['email', 'max:100', 'nullable'],
            'CCmycompany4' => ['email', 'max:100', 'nullable'],
            'CCmycompany5' => ['email', 'max:100', 'nullable'],
            'CCmycompany6' => ['email', 'max:100', 'nullable'],
            'CChaken1' => ['email', 'max:100', 'nullable'],
            'CChaken2' => ['email', 'max:100' ,'nullable'],
            'CChaken3' => ['email', 'max:100' ,'nullable'],
            'CChaken4' => ['email', 'max:100' ,'nullable'],
            'CChaken5' => ['email', 'max:100' ,'nullable'],
            'CChaken6' => ['email', 'max:100' ,'nullable'],
            'report1' => ['string', 'max:100' ,'nullable'],
            'report2' => ['string', 'max:100' ,'nullable'],
            'report3' => ['string', 'max:100' ,'nullable'],
            'report4' => ['string', 'max:100' ,'nullable'],
            'report5' => ['string', 'max:100' ,'nullable'],
            'report6' => ['string', 'max:100' ,'nullable'],
            'math' => ['string', 'max:3500', 'nullable'],
        ];
    }

    public function attributes()
    {
        return[
            'name' => '名前',
            'yomigana' => 'よみがな',
            'company' => '派遣会社',
            'Tnumber' => '派遣コード',
            'depart' => '配属部署',
            'section' => 'セクション',
            'job' => '職種',
            'firstDay' => '入社日',
            'startDay' => '契約開始日',
            'endDay' => '契約終了日',
            'term' => '契約期間',
            'workType' => '勤務形態',
            'hcost' => '派遣料',
            'tmcost' => '交通費(月額)',
            'tdcost' => '交通費(日額)',
            'troute' => '交通ルート',
            'pnumber' => 'PJ番号',
            'pname' => 'PJ名',
            'tcontent' => '作業内容',
            'HAname' => '派遣元担当者名',
            'HAemail' => '派遣元担当者email',
            'remark' => '備考',
            'confirmer' => '部内更新確認者',
            'Cemail' => '部内更新確認者email',
            'CostMemo' => '派遣料変更の履歴など',
            'kairan1' => '稟議回覧先1',
            'kairan2' => '稟議回覧先2',
            'kairan3' => '稟議回覧先3',
            'kairan4' => '稟議回覧先4',
            'kairan5' => '稟議回覧先5',
            'CCmycompany1' => '部内確認CCメール1',
            'CCmycompany2' => '部内確認CCメール2',
            'CCmycompany3' => '部内確認CCメール3',
            'CCmycompany4' => '部内確認CCメール4',
            'CCmycompany5' => '部内確認CCメール5',
            'CCmycompany6' => '部内確認CCメール6',
            'CChaken1' => '派遣元確認CCメール1',
            'CChaken2' => '派遣元確認CCメール2',
            'CChaken3' => '派遣元確認CCメール3',
            'CChaken4' => '派遣元確認CCメール4',
            'CChaken5' => '派遣元確認CCメール5',
            'CChaken6' => '派遣元確認CCメール6',
            'report1' => '稟議報告先1',
            'report2' => '稟議報告先2',
            'report3' => '稟議報告先3',
            'report4' => '稟議報告先4',
            'report5' => '稟議報告先5',
            'report6' => '稟議報告先6',
            'math' => '給与計算方法'
        ];
        
    }
}
