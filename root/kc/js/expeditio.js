var Expedition = function () {
    var obj = this;
    obj.areasList = null;
    obj.shiptypeList = null;

    obj.getAreasList = function (callback) {
        $.ajax({
            url: 'api/areas.php',
            dataType: 'json'
        }).done(function (val) {
            if (!!callback) {
                callback(val);
            }
        });
    };
    obj.getShiptypeList = function (callback) {
        $.ajax({
            url: 'api/shiptype.php',
            dataType: 'json'
        }).done(function (val) {
            if (!!callback) {
                callback(val);
            }
        });
    };
    obj.getAreasById = function (id) {
        for (var i = 0; i < obj.areasList.length; i++) {
            var item = obj.areasList[i];
            if (item.Id == id) {
                return item;
            }
        }

        return null;
    };
    obj.getAreasName = function (Id) {
        var val = obj.getAreasById(Id);
        if (!val) {
            return Id;
        }

        return val.Name;
    };
    obj.getShiptypeById = function (id) {
        for (var i = 0; i < obj.shiptypeList.length; i++) {
            var item = obj.shiptypeList[i];
            if (item.Id == id) {
                return item;
            }
        }

        return null;
    };
    obj.getShipTypeName = function (Id) {
        var val = obj.getShiptypeById(Id);
        if (!val) {
            //return '不限定';
            return null;
        }

        return val.Name;
    };
    obj.getList = function (callback) {
        $.ajax({
            url: 'api/expeditions.php',
            dataType: 'json'
        }).done(function (val) {
            if (!!callback) {
                callback(val.Data);
            }
        });
    };
    obj.getList = function (callback) {
        $.ajax({
            url: 'api/expeditions.php',
            dataType: 'json'
        }).done(function (val) {
            if (!!callback) {
                callback(val.Data);
            }
        });
    };
    obj.uie = function (tag) {
        return $('<' + tag + '></' + tag + '>');
    };
    obj.XToY = function (val) {
        if (!val) {
            return val;
        }
        var list = val.split(',');
        if (list.length < 2) {
            return val;
        }
        return list[0] + ' - ' + list[list.length - 1];
    };
    obj.dateFormat = function (min) {
        var h = (min / 60 >> 0);
        if (h == 0) {
            h = '00';
        }
        var m = min % 60;
        if (m == 0) {
            m = '00';
        }
        return h + ":" + m;
    };
    obj.createShiptypeItem = function (item) {
        var tr_val = obj.uie('tr');

        //tr_val.append(obj.uie('td').text(item.Id));
        tr_val.append(obj.uie('td').text(item.Name));
        tr_val.append(obj.uie('td').text(item.Count));
        tr_val.append(obj.uie('td').text(item.Conditions));

        return tr_val;
    };
    obj.createTitle = function (val) {
        var div = obj.uie('div');
        div.addClass('title');
        div.append(obj.uie('span').text('[ID ' + val.Number + ']'));
        div.append(obj.uie('span').text(val.Name));

        return div;
    };
    obj.createShiptypeList = function (list) {
        if (!list || list.length <= 0) return null;

        var table = obj.uie('table');
        var tr_title = obj.uie('tr');
        table.addClass('shiptype');
        table.append(tr_title);
        //tr_title.append(obj.uie('th').text('Id'));
        tr_title.append(obj.uie('th').text('名称'));
        tr_title.append(obj.uie('th').text('数量'));
        tr_title.append(obj.uie('th').text('同等条件'));

        $.each(list, function (index, val) {
            var tr_val = obj.createShiptypeItem(val);
            if (!!tr_val)
                table.append(tr_val);
        });

        return table;
    };
    obj.createItem = function (item) {
        var div = obj.uie('table');
        var row = function (title, val) {
            if (!val || val.length <= 0) return;

            var tr = obj.uie('tr');
            var td_title = obj.uie('td');
            var td_val = obj.uie('td');
            tr.append(td_title);
            tr.append(td_val);
            div.append(tr);

            td_title.text(title);
            td_val.text(val);

            return tr;
        };

        //row('Id', item.Id);
        row('编号', item.Number);
        row('名称', item.Name);
        row('难度', item.Rank);
        row('区域', obj.getAreasName(item.AreaId));
        row('简介', item.Description);
        row('时间', obj.dateFormat(item.Time));
        row('消耗燃料', item.ConsumeFuel + '%');
        row('消耗弹药', item.ConsumeAmmunition + '%');
        row('获得燃料', item.GetFuel);
        row('获得弹药', item.GetAmmunition);
        row('获得钢铁', item.GetSteel);
        row('获得铝材', item.GetAluminum);
        row('获得经验', item.GetExp);
        row('获得资材', obj.XToY(item.GetBuildingMaterials));
        row('获得高速建造', obj.XToY(item.GetHighSpeedBuilding));
        row('获得高速修复', obj.XToY(item.GetHighSpeedRepair));
        row('获得家具箱（小）', obj.XToY(item.GetFurnitureSmall));
        row('获得家具箱（中）', obj.XToY(item.GetFurnitureModerate));
        row('获得家具箱（大）', obj.XToY(item.GetFurnitureBig));
        row('总等级', item.SumLevel);
        row('旗舰等级', item.FlagshipLevel);
        row('旗舰类型', obj.getShipTypeName(item.FlagshipType));
        row('最低舰数', item.ShipCount);
        row('带缶数', item.BarrelCount);
        row('带缶舰数', item.BarrelShipCount);
        row('说明', item.Explanation);
        row('追加说明', item.AppendExplanation);

        var shiptype_row = row('需要舰种', item.ShipTypes);
        if (!!shiptype_row) {
            var td_val = shiptype_row.find('td:last');
            shiptype_row.find('td:first').addClass('shiptype');
            td_val.empty();
            td_val.append(obj.createShiptypeList(item.ShipTypes));
        }

        return div;
    };
    obj.createList = function () {
        obj.getList(function (list) {
            var content = $('.content');
            $.each(list, function (index, val) {
                var title = obj.createTitle(val);
                var table = obj.createItem(val);
                content.append(title);
                content.append(table);
            });
        });
    };

    obj.initData = function () {
        obj.getAreasList(function (val) {
            obj.areasList = val;
            obj.getShiptypeList(function (val) {
                obj.shiptypeList = val;
                obj.createList();
            });
        });
    };
    obj.init = function () {
        obj.initData();
    };
};

var expedition = null;
Tools.appendJs('http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js', function () {
    expedition = new Expedition();
    expedition.init();
});