var Expedition = function() {
    var obj = this;
    obj.areasList = null;
    obj.shiptypeList = null;
    obj.groupList = null;

    obj.getAreasList = function(callback) {
        $.ajax({
            url: 'api/areas.php',
            dataType: 'json'
        }).done(function(val) {
            if (!!callback) {
                callback(val);
            }
        });
    };
    obj.getShiptypeList = function(callback) {
        $.ajax({
            url: 'api/shiptype.php',
            dataType: 'json'
        }).done(function(val) {
            if (!!callback) {
                callback(val);
            }
        });
    };
    obj.getGroupList = function(callback) {
        $.ajax({
            url: 'api/groups.php',
            dataType: 'json'
        }).done(function(val) {
            if (!!callback) {
                callback(val);
            }
        });
    };
    obj.getAreasById = function(id) {
        for (var i = 0; i < obj.areasList.length; i++) {
            var item = obj.areasList[i];
            if (item.Id == id) {
                return item;
            }
        }

        return null;
    };
    obj.getAreasName = function(Id) {
        var val = obj.getAreasById(Id);
        if (!val) {
            return Id;
        }

        return val.Name;
    };
    obj.getShiptypeById = function(id) {
        for (var i = 0; i < obj.shiptypeList.length; i++) {
            var item = obj.shiptypeList[i];
            if (item.Id == id) {
                return item;
            }
        }

        return null;
    };
    obj.getShipTypeName = function(Id) {
        var val = obj.getShiptypeById(Id);
        if (!val) {
            //return '不限定';
            return null;
        }

        return val.Name;
    };
    obj.getGroupById = function(id) {
        for (var i = 0; i < obj.groupList.length; i++) {
            var item = obj.groupList[i];
            if (item.Id == id) {
                return item;
            }
        }

        return null;
    };
    obj.getList = function(callback) {
        $.ajax({
            url: 'api/expeditions.php',
            dataType: 'json'
        }).done(function(val) {
            if (!!callback) {
                callback(val.Data);
            }
        });
    };
    obj.getList = function(callback) {
        $.ajax({
            url: 'api/expeditions.php',
            dataType: 'json'
        }).done(function(val) {
            if (!!callback) {
                callback(val.Data);
            }
        });
    };
    obj.uie = function(tag) {
        return $('<' + tag + '></' + tag + '>');
    };
    obj.XToY = function(val) {
        if (!val) {
            return val;
        }
        var list = val.split(',');
        if (list.length < 2) {
            return val;
        }
        return list[0] + ' - ' + list[list.length - 1];
    };
    obj.dateFormat = function(min) {
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
    obj.createGroupItem = function(id) {
        var ul = obj.uie('ul');
        var group = obj.getGroupById(id);
        $.each(group.ShipTypes, function(index, val) {
            ul.append(obj.uie('li').text(val.Name));
        });

        return ul;
    };


    obj.createShiptypeItem = function(item) {
        var tr_val = obj.uie('tr');

        var group = obj.createGroupItem(item.GroupId);
        tr_val.append(obj.uie('td').html(group));
        tr_val.append(obj.uie('td').text(item.Count));

        return tr_val;
    };
    obj.createTitle = function(val) {
        var div = obj.uie('div');
        div.addClass('title');
        div.append(obj.uie('span').text('[ID ' + val.num + ']'));
        div.append(obj.uie('span').text(val.name));

        return div;
    };
    obj.createShiptypeList = function(list) {
        if (!list || list.length <= 0) return null;

        var table = obj.uie('table');
        var tr_title = obj.uie('tr');
        table.addClass('shiptype');
        table.append(tr_title);
        //tr_title.append(obj.uie('th').text('Id'));
        tr_title.append(obj.uie('th').text('舰种'));
        tr_title.append(obj.uie('th').text('数量'));
        // tr_title.append(obj.uie('th').text('同等条件'));

        $.each(list, function(index, val) {
            var tr_val = obj.createShiptypeItem(val);
            if (!!tr_val)
                table.append(tr_val);
        });

        return table;
    };
    obj.createItem = function(item) {
        var div = obj.uie('table');
        var row = function(title, val) {
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
        row('编号', item.num);
        row('名称', item.name);
        row('难度', item.r);
        row('区域', obj.getAreasName(item.a_id));
        row('简介', item.des);
        row('时间', obj.dateFormat(item.time));
        row('消耗燃料', item.c_fuel + '%');
        row('消耗弹药', item.c_ammun + '%');
        row('获得燃料', item.g_fuel);
        row('获得弹药', item.g_ammun);
        row('获得钢铁', item.g_steel);
        row('获得铝材', item.g_alumi);
        row('获得经验', item.g_exp);
        row('获得资材', obj.XToY(item.g_bm));
        row('获得高速建造', obj.XToY(item.g_hsb));
        row('获得高速修复', obj.XToY(item.g_hsr));
        row('获得家具箱（小）', obj.XToY(item.g_f_s));
        row('获得家具箱（中）', obj.XToY(item.g_f_m));
        row('获得家具箱（大）', obj.XToY(item.g_f_b));
        row('总等级', item.sum_lv);
        row('旗舰等级', item.fs_lv);
        row('旗舰类型', obj.getShipTypeName(item.fs_t));
        row('最低舰数', item.s_count);
        row('带缶数', item.b_count);
        row('带缶舰数', item.bs_count);
        row('说明', item.expl);
        row('追加说明', item.aexpl);

        var shiptype_row = row('需要舰种', item.s_types);
        if (!!shiptype_row) {
            var td_val = shiptype_row.find('td:last');
            shiptype_row.find('td:first').addClass('shiptype');
            td_val.empty();
            td_val.append(obj.createShiptypeList(item.s_types));
        }

        return div;
    };
    obj.createList = function() {
        obj.getList(function(list) {
            var content = $('.content');
            $.each(list, function(index, val) {
                var title = obj.createTitle(val);
                var table = obj.createItem(val);
                content.append(title);
                content.append(table);
            });
        });
    };

    obj.initData = function() {
        obj.getAreasList(function(val) {
            obj.areasList = val;
            obj.getGroupList(function(val) {
                obj.groupList = val;
                obj.getShiptypeList(function(val) {
                    obj.shiptypeList = val;
                    obj.createList();
                });
            });
        });
    };
    obj.init = function() {
        obj.initData();
    };

    return obj;
};

var expedition = null;
Tools.appendJs('http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js', function() {
    expedition = new Expedition();
    expedition.init();
});